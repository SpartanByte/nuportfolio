@extends('layouts.admin')
@section('title', 'Add New Blog Post')
@section('content')
    <div class="post-form-container">
        <p class="h4">Admin Center &#9654; Create Post</p>
        <form class="post-form" method="POST" action="{{ route('admin.store')}}">
            {{ csrf_field() }}
            <div class="input-group">
                <label for="author">Author:<br />
                    <input name="author" type="text" class="text-input" placeholder="Your Name" required />
                </label>
            </div>
            <div class="input-group">
                <label for="title">Post Title:<br />
                    <input name="title" type="text" class="text-input" placeholder="Enter Post Title" required />
                </label>
            </div>
            <div class="input-group">
                <label for="descriptions">Enter Description:<br />
                    <input name="descriptions" type="text" class="text-input" placeholder="Enter Description" required />
                </label>
            </div>
            <div class="input-group">
                <label for="body">Body: <br />
                    <textarea name="body" class="body-input" name="body" rows="20"></textarea>
                </label>
            </div>
            <div class="form-btn-group">
                <input type="submit" class="btn btn-small btn-success post-btn" value="Submit Post" />
            </div>
        </form>
    </div>
@endsection