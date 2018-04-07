<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\student;
use App\Http\Requests\CreatestudentRequest;
use Session;

use Illuminate\Support\Facades\DB;

class studentsController extends Controller
{
   public function indexx()
    {
        $student=students::all();
        $c= $student->last();
        // dd($c);
        return view('index',[
            'body' => $c->body,
            'title' => $c->title,
        ]);
    }

    public function index()
    {   
        // return \Auth::user(); // this works
    	//$art= students::latest('published_at')->published()->get();
        $students = student::orderBy('id')->paginate(2);
    	

    	
        // return view('about');
        // return $art;
        return view('students.index',compact('students'));
    }

       

    public function show($id)
    {
    		// return $id;
    	 $student = student::findOrFail($id);

         // return $student;
         // dd($student->id);
    	 //dd($student);
    	// return $student->name;
    	 return view('students.show',compact('student'));
    }


    public function create()
    {
        // if(\Auth::guest())
        //     {
        //         return redirect('/students');
        //     }                        // this also works
            $elect1s = DB::table('subjects')->where('type','like','Elective I')->get();
            $elect2s = DB::table('subjects')->where('type','like','Elective II')->get();

        return view('students.create',compact('elect1s','elect2s'));
 
            }
    public function edit($id)
    {
        $student = student::findOrFail($id);

        return view('students.edit',compact('student'));

    }

    public function update($id, Request $request)
    {
        $student = student::findOrFail($id);

        $student->update($request->all());
        // flash('Your message has been updated')->important();
        // session()->flash('flash_message','Your student has been created');
        // session()->flash('flash_message_important', true);
        //Session::flash('flash_message','Your student has been updated!');
        // students:: update($request->all());
        // 
        return redirect('students');
        //             ->with([
        //          'flash_message'=>'Your student has been updated!',
        //         'flash_message_important',true ]);


    }

    public function store(Request $request)
    {                           
        student:: create($request->all());

        //Session::flash('flash_message','Your student has been created!');
        // return $request->input();

        return redirect('students');

    }  

}
