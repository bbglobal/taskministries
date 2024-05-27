<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;

class AccountController extends Controller
{
    function editAccount($id)
    {
        $user = User::find($id);
        $data = compact('user');
        return view('admin.edit-account', $data);
    }

    function updateAccount(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'password' => '',
            'confirm_password' => $request->filled('password') ? 'required|same:password' : '',
        ]);

        $user = User::find($id);
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->contact = $request['contact'];
        $user->password = bcrypt($request['password']);
        $user->save();

        if (Auth::user()->role == "student") {
            $student = User::find($id);
            $student->name = $request['name'];
            $student->email = $request['email'];
            $student->contact = $request['contact'];
            $student->password = bcrypt($request['password']);
            $student->save();
        } elseif (Auth::user()->role == "teacher") {
            $teacher = User::find($id);
            $teacher->name = $request['name'];
            $teacher->email = $request['email'];
            $teacher->contact = $request['contact'];
            $teacher->password = bcrypt($request['password']);
            $teacher->save();
        }

        return redirect('/' . Auth::user()->role);
    }

    public function requestPassword()
    {
        return view('admin.forgot-password');
    }

    public function emailPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function resetPassword(string $token)
    {
        return view('admin.reset-password', ['token' => $token]);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('admin.login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
