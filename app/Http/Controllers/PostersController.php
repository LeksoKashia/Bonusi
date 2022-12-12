<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posters;

class PostersController extends Controller
{
    public function list() {
        $posts = Posters::select()->where('active', '=', 1)->orderBy('created_at')->limit(5)->get();
        return view('list', ["posts" => $posts]);
    }  

    public function admin() {
        $posts = Posters::all();
        return view('admin', ["posts" => $posts]);
    }

    public function addDeleteUpdate(Request $request) {
        if ($request->input('add') != ""){
            Posters::create([
                "title"=> $request->input('title'),
                "body"=> $request->input('body'),
                "author"=> $request->input('author'),
                "active"=> $request->input('active')
            ]);
        }else if ($request->input('edit') != "") {
            $id = $request->input('id');
            $title = $request->input('title');
            $body = $request->input('body');
            $author = $request->input('author');
            $active = $request->input('active');
            Posters::where('id', '=', $id)->update(['title' => $title]);
            Posters::where('id', '=', $id)->update(['body' => $body]);
            Posters::where('id', '=', $id)->update(['author' => $author]);
            Posters::where('id', '=', $id)->update(['active' => $active]);

            
        }else{
            Posters::where('title', '=', $request->input('delete'))->delete();
        }
        
        return $this->admin();
    }
    
    
}
