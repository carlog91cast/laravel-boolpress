@extends('layouts.app')

@section('title', 'content')

@section('content')
    <div class="container my-5">
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.posts.store') }}" method="POST" class="row g-3">

                @csrf
                <div class="col-12">
                    <label for="input-author" class="form-label">author</label>
                    <input type="text" name="author" class="form-control" id="input-author">
                </div>
                {{-- <div class="col-md-6">
                    @if (filter_var($post->post_image, FILTER_VALIDATE_URL))
                        <img class="w-50" src="{{ $post->post_image }}" alt="image">
                    @else
                        <img class="w-50" src="{{ asset('/storage') . '/' . $post->post_image }}" alt="image">
                    @endif

                </div> --}}
                <div class="col-md-6">
                    <label for="input-title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="input-title">
                </div>
                <div class="col-md-6">
                    <label for="input-image" class="form-label">image</label>
                    <input class="form-control" name="post_image" id="input-image">
                </div>
                <div class="col-md-6">
                    <label for="input-content" class="form-label">post content</label>
                    <textarea class="form-control" name="post_content" id="input-content" cols="30" rows="10"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="input-date" class="form-label">post date</label>
                    <input type="date" class="form-control" name="post_date" id="input-date">
                </div>
                <div class="col-md-6">
                    <label for="input-image" class="form-label">post image</label>
                    <input type="file" class="form-control" name="post_image_uploaded" id="input-image">
                </div>


                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
            <div class="col-12">
                <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @method('POST')
                
                
                </form>
            </div>
        </div>
    </div>

@endsection
