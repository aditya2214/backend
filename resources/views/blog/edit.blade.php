@extends ('layouts.master')

@section ('title','Belajar Dasar Laravel2')

@section('content')


        <form action="{{route('update_blog',$blog->id)}}" method="post">
          <fieldset>
        
          <h3>Label</h3>
          <input type="text" name="title" value="{{$blog->title}}" style="position:relative; top:-10px;">
          
          <br>
          
            <h3>Description</h3>
            <textarea name="description" id="" cols="30" rows="10" style="position:relative; top:-10px;">{{$blog->description}}</textarea>
          
          <br>
          <input type="submit" name="name" value="edit"> 
          {{csrf_field()}}
          <input type="hidden" name="_method" value="put">
        </fieldset>
      
      </form>


         
    	

@endsection