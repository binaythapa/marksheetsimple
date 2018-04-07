<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\school;
use App\Http\Requests\CreateschoolRequest;
use Session;

class SchoolsController extends Controller
{
   public function indexx()
    {
        $school=schools::all();
        $c= $school->last();
        // dd($c);
        return view('index',[
            'body' => $c->body,
            'title' => $c->title,
        ]);
    }

    public function index()
    {   
        // return \Auth::user(); // this works
    	//$art= schools::latest('published_at')->published()->get();
        $schools = school::orderBy('id')->paginate(2);
    	

    	
        // return view('about');
        // return $art;
        return view('schools.index',compact('schools'));
    }

       

    public function show($id)
    {
    		// return $id;
    	 $school = school::findOrFail($id);

         // return $school;
         // dd($school->id);
    	 //dd($school);
    	// return $school->name;
    	 return view('schools.show',compact('school'));
    }


    public function create()
    {
        // if(\Auth::guest())
        //     {
        //         return redirect('/schools');
        //     }                        // this also works


        return view('schools.create');
 
            }
    public function edit($id)
    {
        $school = school::findOrFail($id);

        return view('schools.edit',compact('school'));

    }

    public function update($id, Request $request)
    {
        $school = school::findOrFail($id);

        $school->update($request->all());
        // flash('Your message has been updated')->important();
        // session()->flash('flash_message','Your school has been created');
        // session()->flash('flash_message_important', true);
        //Session::flash('flash_message','Your school has been updated!');
        // schools:: update($request->all());
        // 
        return redirect('schools');
        //             ->with([
        //          'flash_message'=>'Your school has been updated!',
        //         'flash_message_important',true ]);


    }

    public function store(Request $request)
    {                           
        school:: create($request->all());

        //Session::flash('flash_message','Your school has been created!');
        // return $request->input();

        return redirect('schools');

    }  

}