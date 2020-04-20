@extends ('layouts.master')

@section ('title','Belajar Dasar Laravel2')

@section('content')
<!-- Menapilkan pesan kesalahaan saat melanggar peraturan -->
<!-- @if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
  @endforeach
</ul>
@endif -->

<div class="jumbotron text-center">
  <h3 >Create Blog</h3>
</div>

<hr>


        <form action="/blog" method="post">
        <!-- value old pada inputan dalah untuk mencegah teks di inputan hilang ketika salah input -->
        <!-- penulisan value old pada input adalah value="{{old('title')}}" -->
        
         <div class="row">
            <div class="col-md-4">
               <p></p>
            </div>
            <div class="col-md-4">
             <div class="alert alert-primary" role="alert"><br>
               <input class="form-control" name="title" type="text" placeholder="Title" value="{{old('title')}}" style="position:relative; top:-10px;">
                <!-- untuk Menampilkan Pesan Error Pada saat Penginputan -->
                @if($errors->has('title'))
                    <li>{{$errors->first('title')}}</li>
                @endif
                    <textarea name="description" placeholder="Description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{old('description')}}</textarea>
                    <!-- <textarea   value="" id="" cols="30" rows="10" style="position:relative; top:-10px;"></textarea> -->
                        <br>
                      <!-- untuk Menampilkan Pesan Error Pada saat Penginputan -->
                      @if($errors->has('description'))
                        <li>{{$errors->first('description')}}</li>
                      @endif
                      <input type="submit" name="name" value="create"> 
                      {{csrf_field()}}
                  </div>
           </div>
           <div class="col-md-4">
            <p></p>
           </div>

         </div>      
      </form>


         
    	

@endsection