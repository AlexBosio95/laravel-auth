@extends('layouts.app')

@section('content')

    <div class="container">

        <a class="btn btn-primary my-4" href="{{route('admin.posts.index')}}">< Back</a>

        <div class="card">
            <div class="card-header">
                {{$data->name}}
            </div>
            <div class="card-body">
                <p class="card-text">{{$data->content}}</p>
                <div class="card-footer text-muted">
                    {{$data->slug}} / {{$data->tag}}
                </div>
                
            </div>
        </div>    
    </div>

@endsection