@extends('layouts.app')
<link rel="stylesheet" href="/css/bootstrap.min.css">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                 <a type="button" class="btn btn-primary" href="http://127.0.0.1:8000/blog">Blog Klik</a>
                </div>
                
                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                    You are logged in! -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
