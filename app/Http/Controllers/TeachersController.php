<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Http\Request;
use Webklex\IMAP\Facades\Client;
use App\Models\Lecture;
use App\Models\Student;
use App\Models\Course;
use App\Models\Enroll;
use App\Models\shop;
use Webklex\PHPIMAP\Folder;

class TeachersController extends Controller
{
    public function teacher()
    {
        $user = Auth::user();
        if (Auth::check() && $user->role === "teacher") {

            session()->put("username", $user->name);
            session()->put("role", $user->role);
            return view('teacher.teacher-dashboard');
        }
        return redirect('admin/login');
    }

    public function courses()
    {
        $teacherName = session()->get('username');

        $courses = Course::join('teachers', 'courses.teacher', '=', 'teachers.id')
            ->select('*')
            ->where('teachers.first_name', $teacherName)
            ->get();

        $data = compact('courses');
        return view('teacher.courses')->with($data);
    }

    function students()
    {
        $teacherName = session()->get('username');

        $students = Enroll::join('courses', 'enrolls.course_id', '=', 'courses.id')
            ->join('students', 'enrolls.student_id', '=', 'students.id')
            ->join('teachers', 'courses.teacher', '=', 'teachers.id')
            ->select('students.name', 'students.email', 'students.contact', 'students.created_at', 'students.id', 'courses.title', 'teachers.first_name', 'teachers.last_name')
            ->where('teachers.first_name', $teacherName)
            ->get();

        $data = compact('students');
        return view('teacher/students')->with($data);
    }

    function contact($id)
    {
        $students = Student::find($id);
        $data = compact('students');
        return view('teacher/contact')->with($data);
    }

    function contactStudent(Request $request, $id)
    {
        $request->validate([
            'subject' => "required",
            'body' => "required",
        ]);

        $student = Student::find($id);
        $attachment = null; // Initialize $attachment variable

        if ($request->hasFile('attachment')) {
            $attachment = $request->file('attachment')->getClientOriginalName();
            $request->file('attachment')->move('assets/images/attachments/', $attachment);
        }

        $sendTo = $student->email;
        $subject = $request['subject'];
        $body =  $request['body'];
        $isHTML = true;

        // Creating PHPMailer instance
        $mail = new PHPMailer();

        // Settings
        $mail->IsSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->Host       = env('SMTP_HOST', "");
        $mail->SMTPDebug  = 0;
        $mail->SMTPAuth   = true;
        $mail->Port       = env('SMTP_PORT', "");
        $mail->Username   = env('SMTP_USERNAME', "");
        $mail->Password   = env('SMTP_PASS', "");
        $mail->setFrom(env('SMTP_USERNAME', ""), "MY EMAIL");
        $mail->addAddress($sendTo);
        $mail->SMTPSecure = 'ssl';

        // Content
        $mail->isHTML($isHTML);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        // Attachments (if available)
        if ($attachment) {
            $mail->addAttachment(public_path("assets/images/attachments/{$attachment}"), $attachment);
        }

        // Send
        $mail->send();

        return redirect('instructor/contact/' . $id)->with('success', 'Mail sent Successfully');
    }

    function calendar()
    {
        $lectures = Lecture::all();

        $events = array();

        foreach ($lectures as $lecture) {
            $events[] = [
                'id' => $lecture->id,
                'title' => $lecture->title,
                'start' => $lecture->start_date,
                'end' => $lecture->end_date,
                'class_link' => $lecture->class_link,
                'color' => '#1367C9'
            ];
        }
        $data = compact('events');
        return view('teacher/calendar')->with($data);
    }

    function shop()
    {
        $shop = shop::all();
        $data = compact('shop');
        return view('teacher/shop')->with($data);
    }

    function email()
    {
        $client = Client::account('default');
        $client->connect();

        // Get all folders
        $folders = $client->getFolders();

        $messages = collect();

        // Iterate through each folder
        foreach ($folders as $folder) {
            // Get messages from the current folder
            $folderMessages = $folder->messages()->all()->get();

            // Add messages to the collection
            $messages = $messages->merge($folderMessages);
        }

        $client->disconnect();

        return view('teacher.emails', ['messages' => $messages]);
    }

    function emailEach($id)
    {
        $client = Client::account('default');
        $client->connect();

        // Get all folders
        $folders = $client->getFolders();

        $message = null;

        // Iterate through each folder
        foreach ($folders as $folder) {
            // Get messages from the current folder
            $message = $folder->messages()->where('uid', $id)->first();

            if ($message) {
                break;
            }
        }

        $client->disconnect();

        return view('teacher.emails', ['message' => $message]);
    }
}
