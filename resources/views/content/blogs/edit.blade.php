@extends('layouts/contentNavbarLayout')

@section('title', ' Blogs')

@section('content')
  <div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
      <div class="card mb-4">
        @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Edit Blog</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('admin_blogs.update', ['id' => $blog->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$blog->title}}"/>
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="title">Slug</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{$blog->slug}}"/>
                @error('slug')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="title">Choose Category</label>
              <div class="col-sm-10">
                <select class="form-control" id="category_id" name="category_id">
                  <option id="" selected disabled>Choose Category</option>
                  @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $blog->category_id ? 'selected' : '' }}>
                      {{ $category->category_name }}
                    </option>
                  @endforeach
                </select>
                @error('category_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="description">Description</label>
              <div class="col-sm-10">
                <textarea id="editor10" name="description">{{$blog->description}}</textarea>
                @error('description')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="image">Banner Image</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" id="image" name="image" />
                @error('country')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
