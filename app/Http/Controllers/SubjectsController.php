<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\subject;
use App\Http\Requests\CreatesubjectRequest;
use Session;

class SubjectsController extends Controller
{
   public function indexx()
    {
        $subject=subjects::all();
        $c= $subject->last();
        // dd($c);
        return view('index',[
            'body' => $c->body,
            'title' => $c->title,
        ]);
    }

    public function index()
    {   
        // return \Auth::user(); // this works
        //$art= subjects::latest('published_at')->published()->get();
        $subjects = subject::orderBy('type')->orderBy('id')->paginate(20);
        

        
        // return view('about');
        // return $art;
        return view('subjects.index',compact('subjects'));
    }

       

    public function show($id)
    {
            // return $id;
         $subject = subject::findOrFail($id);

         // return $subject;
         // dd($subject->id);
         //dd($subject);
        // return $subject->name;
         return view('subjects.show',compact('subject'));
    }


    public function create()
    {
        // if(\Auth::guest())
        //     {
        //         return redirect('/subjects');
        //     }                        // this also works


        return view('subjects.create');
 
            }
    public function edit($id)
    {
        $subject = subject::findOrFail($id);

        return view('subjects.edit',compact('subject'));

    }

    public function update($id, Request $request)
    {
        $subject = subject::findOrFail($id);

        $subject->update($request->all());
        // flash('Your message has been updated')->important();
        // session()->flash('flash_message','Your subject has been created');
        // session()->flash('flash_message_important', true);
        //Session::flash('flash_message','Your subject has been updated!');
        // subjects:: update($request->all());
        // 
        return redirect('subjects');
        //             ->with([
        //          'flash_message'=>'Your subject has been updated!',
        //         'flash_message_important',true ]);


    }

    public function store(Request $request)
    {                           
        subject:: create($request->all());

        //Session::flash('flash_message','Your subject has been created!');
        // return $request->input();

        return redirect('subjects');

    }  

}
