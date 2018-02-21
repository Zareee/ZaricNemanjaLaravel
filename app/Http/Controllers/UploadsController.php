<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\MessageBag;

use App\Upload;

use App\Cart;

use DB;

use Validator;

use Storage;



class UploadsController extends Controller
{


    public function index(){

        $count = Cart::count();

        $uploads = Upload::all();

        //return $uploads;
    	return view('uploads.index', compact('uploads'));
    }

    public function edit(Request $request){

        $upload = Upload::find($request->editID);
        $upload->title=$request->title;
        $upload->description=$request->description;
        $upload->price=$request->price;
        $upload->save();
        return back();

    }


    public function create(){


    	return view('uploads.create');
    }


    public function about(){

        return view('uploads.about');
    }


    public function store(Request $request){

        $upload = Upload::create($request->all());

        if ($request->hasFile('image')) {

                      
            $filenameWithExt = $request->file('image')->getClientOriginalName();

            $file_name = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('image')->getClientOriginalExtension();

            $filenameToStore = $file_name.'_'.time().'.'.$extension;

            $request->file('image')->move(storage_path('app/public'), $filenameToStore);
            
            // save new image $file_name to database
           $upload->update(['image' => '/storage/'.$filenameToStore]);          
        
        }

        return redirect('/');

    	
    }

    public function getter(Request $request){
        $uploads = DB::table('uploads')->where('id', $request->id)->first();
        return response(compact('uploads')); 

    }

    public function delete($id){


        $image = Upload::find($id);

        unlink(public_path().$image->image);

        $image->delete();
    

        return redirect('/');

    }



}
