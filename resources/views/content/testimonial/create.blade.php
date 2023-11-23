@extends('layouts/contentNavbarLayout')

@section('title', ' Testimonials')

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
          <h5 class="mb-0">Add Testimonial</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('admin_testimonials.store') }}" method="POST">
            @csrf
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="slider_title">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" />
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="message">Message</label>
              <div class="col-sm-10">
                <textarea id="editor10" name="message"></textarea>
                @error('message')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="country">Country</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="country" name="country" placeholder="Country" />
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
