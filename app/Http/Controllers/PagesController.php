<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $tasks = [
            'task 1',
            'Task 2',
            'Task 3'
        ];
        return view('welcome')->withTasks($tasks);
//    return view('welcome',[
//        'tasks' => $tasks
//    ]);
    }
}
