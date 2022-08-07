<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Career;

class CareerController extends Controller
{
    public function index() {
        return view('show');
    }

    public function index2() {        
        $files = File:: all();
        return view('upload')->with('files', $files);
        return view('show');
    }

    public function showCareers() {
        $career = Career::all();

        return view('show', compact('career'));
    }

    public function save(Request $request) {
        $this->validate($request, [
            'job_name' => 'required',
            'company' => 'required',
            'salary' => 'required',
            'description' => 'required',
            'category' => 'required',
            'email' => 'required',
            'number' => 'required',
        ]);

        $career = new Career();

        $career->job_name = $request->input('job_name');
        $career->company = $request->input('company');
        $career->salary = $request->input('salary');
        $career->description = $request->input('description');
        $career->category = $request->input('category');
        $career->email = $request->input('email');
        $career->number = $request->input('number');

        $career->save();
        return redirect('/');
    }

    public function update(Request $request, $id) {
        $career = Career::find($id);
        $input = $request->all();
        $career->fill($input)->save();

        return redirect('/');
    }

    public function delete($id) {
        $career = Career::find($id);
        $career->delete();

        return redirect('/');
    }

     public function store(Request $request){
  
        $messages = [
            'required' => 'Please select file to upload',
        ];
  
        $this->validate($request, [
            'file' => 'required',
        ], $messages);
  
        foreach ($request->file as $file) {
            $filename = time().'_'.$file->getClientOriginalName();
            $filesize = $file->getSize();
            $file->storeAs('public/',$filename);
            $fileModel = new File;
            $fileModel->name = $filename;
            $fileModel->size = $filesize;
            $fileModel->location = 'storage/'.$filename;
            $fileModel->save();          
        }
  
        return redirect('/')->with('success', 'File/s Uploaded Successfully');
  
    }
}
