<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Page;
use App\Models\Record;
use App\Models\Form;
use App\Models\User;
use App\Models\Notice;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user = count(User::all());
        $img = count(File::all());
        $page = count(Page::all());
        $record = count(Record::all());

        return view('home',compact('user','img','page','record'));
    }

    public function indexEstudiantes(){
            $first_notices = (array) DB::table('notices')->get()->first();
            if(!empty($first_notices)){
                $notices = DB::table('notices')->where('notices.id' ,'!=', $first_notices['id'])->get();
                $nu =  count($notices) ;
                $notices = json_decode($notices);

                return view('users.student.index',compact('first_notices','notices','nu'));
            }
            return view('users.student.index');
    }

    public function indexEventos(){
            $events = Event::all();
            return response()->json($events);
    }
    
    public function login(){
        return redirect('login');
    }

}
