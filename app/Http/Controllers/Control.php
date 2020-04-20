<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Blog;


class Control extends Controller
{

  public function index()
  {

    // Insert bisa
    // $blog = new Blog;
    // $blog->title='halo Cimahi';
    // $blog->description='isi dari halo cimahi';
    // $blog->save();    


    // insert mass assigment
    // Blog::create([
    //   'title'=>'Halo Bekasi',
    //   'description'=>'Ini adalah isi Bekasi',
    // ]);

    // update biasa
    // $blog = Blog::where('title','Halo Bekasi')->first();
    // $blog->title = 'halo bali';
    // $blog->description ='ini adalah isi bali';
    // $blog->save();

    // update mass assigment
    // Blog::find(6)->update([
    //   'title'=>'halo Banten',
    //   'description'=>'isi dari banten'
    // ]);

    // delete
    // $blog=Blog::find(6);
    // $blog->delete();

    // delete destroy
    // Blog::destroy(3,4);

    // return soft delete
    // Blog::withTrashed()->restore();

   
    	        // mengambil data dari table pegawai
		// $blogs = DB::table('blogs')->paginate(10);
 
    	        // mengirim data pegawai ke view index
 
    

    $blogs=Blog::all();
    $blogs = DB::table('blogs')->paginate(10);
    return view('blog/nama',['blogs'=>$blogs]);
  }  

  public function show($id)
  {

       $blog = Blog::find($id);

       if(!$blog)
      abort(404);

      return view('blog/single',['blog'=>$blog]);   
  }


  public function create(){
    return view ('blog/create');
  }

  public function store(Request $request){

    // membuat peraturan pada form -> lihat create.blade.php
    $this->validate($request, [
      'title'        => 'required|min:5',
      'description'  =>'required|min:5|max:200'

    ]);

    $blog = new Blog;
    $blog->title=$request->title;
    $blog->description=$request->description;
    $blog->save();

    return redirect ('/blog');    

  }
  
  public function edit($id)
  
  {
    $blog = Blog::find($id);

    if(!$blog)
    abort(404);
    return view('blog/edit',['blog'=>$blog]);
  }

  public function update(Request $request,$id){

    $blog = Blog::find($id);
    $blog->title = $request->title;
    $blog->description =$request->description;
    $blog->save();

    return redirect ('blog/'.$id);

  }

  public function destroy($id)
  {
    $blogs=Blog::find($id);
    $blogs->delete();

    return redirect('blog');
  }
}

