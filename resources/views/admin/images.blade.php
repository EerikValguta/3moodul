@extends('backpack::layout')

@section('header')
    <section class="content-header">
        <h1>
            Images
            <small>Add and manage images</small>
        </h1>
    </section>
@endsection

@section('content')
    <section class="content">
        <div class="box">
            <div class="box-body">
                <!-- Your image upload form goes here -->
                <form action="{{ route('images.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="field">
                        <label class="label">Choose Image</label>
                        <div class="control">
                            <input type="file" name="image" class="input">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-primary">Upload Image</button>
                        </div>
                    </div>
                </form>

                <!-- Display existing images -->
                <div class="images">
                    @foreach($images as $image)
                        <img src="{{ asset('storage/' . $image->filename) }}" alt="Image">
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
