<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\shop;
use App\Models\Lecture;

class IndexController extends Controller
{
    public function index()
    {
        $courses = Course::join('teachers', 'courses.teacher', '=', 'teachers.id')
            ->select('*')
            ->get()
            ->where('status', 1);
        $data = compact('courses');
        return view("index")->with($data);
    }

    public function about()
    {
        return view("about");
    }

    public function bio()
    {
        return view("bio");
    }

    public function fltc()
    {
        $courses = Course::join('teachers', 'courses.teacher', '=', 'teachers.id')
            ->select('courses.category', DB::raw('MAX(courses.course_image) as course_image'), DB::raw('MAX(courses.sub_title) as sub_title'), DB::raw('MAX(teachers.first_name) as first_name'), DB::raw('MAX(teachers.last_name) as last_name'), DB::raw('MAX(teachers.level) as level'))
            ->where('courses.status', '1')
            ->groupBy('courses.category')
            ->orderBY('courses.created_at')
            ->get();

        $lectures = Lecture::all();

        $events = array(); 

        foreach ($lectures as $lecture) {
            $events[] = [
                'id' => $lecture->id,
                'title' => $lecture->title,
                'start' => $lecture->start_date,
                'end' => $lecture->end_date,
                'class_link' => $lecture->class_link,
                'color' => $lecture->color,
            ];
        }

        $data = compact('courses', 'events');
        return view('fltc')->with($data);
    }

    public function apostolicHub()
    {
        $shop = shop::all();
        $data = compact('shop');
        return view("apolistic-hub")->with($data);
    }

    public function lecturesSpeakers()
    {
        return view("lectures-speakers");
    }

    public function conference()
    {
        return view("conference");
    }

    public function kingdomInspiration()
    {
        return view("kingdom-inspiration");
    }

    public function contact()
    {
        return view("contact");
    }

    public function ministry()
    {
        return view("ministries");
    }

    public function browse(Request $request)
    {
        $selectStatement = Course::join('teachers', 'courses.teacher', '=', 'teachers.id')
            ->select('courses.id', 'courses.course_image', 'courses.title', 'teachers.first_name', 'teachers.last_name', 'courses.start_date', 'courses.end_date', 'courses.starts_at', 'courses.ends_at', 'courses.sub_title', 'courses.fee', 'courses.link', 'courses.category', 'courses.description', 'courses.status')
            ->where('status', '1');

        $filter_category = $request['category'];
        $filter_time = $request['time'];
        $courses = null; // Initialize $courses variable

        if (is_null($filter_category) && is_null($filter_time)) {
            $courses = $selectStatement->get();
        } elseif (!is_null($filter_category) && !is_null($filter_time)) {
            // Filter by both category and time
            if ($filter_time == "Morning") {
                $courses = $selectStatement
                    ->where('courses.category', $filter_category)
                    ->whereTime('courses.starts_at', '<=', '12:00')
                    ->get();
            } elseif ($filter_time == "Afternoon") {
                $courses = $selectStatement
                    ->where('courses.category', $filter_category)
                    ->whereTime('courses.starts_at', '>=', '12:00')
                    ->get();
            }
        } elseif (!is_null($filter_category)) {
            // Filter only by category
            $courses = $selectStatement
                ->where('courses.category', $filter_category)
                ->get();
        }

        $category = Course::join('teachers', 'courses.teacher', '=', 'teachers.id')
            ->select('courses.category')
            ->where('status', '1')
            ->groupBy('courses.category')
            ->get();

        $data = compact('courses', 'category');

        return view("browse")->with($data);
    }

    public function browseEach($id)
    {
        $courses = Course::join('teachers', 'courses.teacher', '=', 'teachers.id')
            ->select('courses.id', 'courses.course_image', 'courses.title', 'teachers.first_name', 'teachers.last_name', 'courses.start_date', 'courses.end_date', 'courses.sub_title', 'courses.fee', 'courses.link', 'courses.category', 'courses.description', 'courses.status')
            ->where('status', '1')
            ->where('courses.id', $id)
            ->get();
        $data = compact('courses');
        return view("browse-each")->with($data);
    }
}
