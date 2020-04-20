@extends ('layouts.master')

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
@section ('title','Belajar Dasar Laravel')

@section('content')

   <div class="alert alert-primary text-center" role="alert" >
         <h3>Semangat Belajar Laravelnya</h3>
   </div>
   
      @foreach($blogs as $blog)
              <li> 
                <a href="/blog/{{$blog->id}}">{{$blog->title}} </a>

                  <form action="{{route('delete_blog',$blog->id)}}" method="post">
                    <input type="submit" name="submit" value="delete">
                      {{csrf_field()}}
                    <input type="hidden" name="_method" value="delete"> 
                  </form>
                </li>
       @endforeach
   
<br>
<a href="/blog/create"><button type="button" class="btn btn-primary">Buat Baru</button></a>


<hr>
{{ $blogs->links() }}

@endsection

