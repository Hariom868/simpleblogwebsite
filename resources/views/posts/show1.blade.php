@extends('posts.layout')
   
@section('content')
<div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb border-left-5%">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('editblog') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="border-left-5%">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $post->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $post->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Author:</strong>
                {{ $post->author }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categories:</strong>
                {{ $post->categories }}
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection