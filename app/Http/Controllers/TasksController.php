<?php

namespace App\Http\Controllers;

use App\tasks;
use Illuminate\Http\Request;
use DB;
use Calendar;
use Illuminate\Support\Facades\Input;

class TasksController extends Controller
{
 
    public function index()
    {
        $count_pendding = DB::table('tasks')->where('status','pendding')->count();
        $count_complete = DB::table('tasks')->where('status','complete')->count();
        $task_pendding = DB::table('tasks')->where('status','pendding')->get();
        $task_complete = DB::table('tasks')->where('status','complete')->get();

        $data["count_pendding"] =  $count_pendding;
        $data["count_complete"] =  $count_complete;
        $data["task_pendding"] =  $task_pendding;
        $data["task_complete"] =  $task_complete;

        return view('pages.tasks.index',$data);

    }

    public function calender(){
        $events = [];
        $data = tasks::all();
            if($data->count()){
                foreach ($data as $key => $value) {
                    if($value->status == "Pendding" ){
                        $events[] = Calendar::event(
                            date_format(date_create($value->task_time),"H:i a")." - ". date_format(date_create($value->task_totime),"H:i a") ." | ". $value->title,
                            true,
                            new \DateTime($value->task_time),
                            new \DateTime($value->task_totime.' +1 day'),
                            null,
                            [
                                'color' => '#2E9AFE',
                                'url' => 'pass here url and any route',
                               
                            ]
                        );
                    }else{
                        $events[] = Calendar::event(
                            date_format(date_create($value->start_date),"H:i a")." - ". date_format(date_create($value->end_date),"H:i a") ." | ". $value->title,
                            true,
                            new \DateTime($value->start_date),
                            new \DateTime($value->end_date.' +1 day'),
                            null,
                            [
                                'color' => '#04B431',
                                'url' => 'pass here url and any route',
                               
                            ]
                        ); 
                    }
                }
            }
    
        $calendar = Calendar::addEvents($events); 
      //  dd( $calendar);
        return view('pages.tasks.calender',compact('calendar'));
    }
}
