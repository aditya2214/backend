@extends ('layouts.master')

@section ('title','Belajar Dasar Laravel2')

@section('content')


      <h3>{{$blog->title}}</h3> 

      <hr>

      <p>
        {{$blog->description}}
      </p>

      <li> <a href="/blog/{{$blog->id}}/edit">edit</a></li>


         
    	

@endsection