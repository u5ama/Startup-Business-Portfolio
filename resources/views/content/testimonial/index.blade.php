@extends('layouts/contentNavbarLayout')

@section('title', ' Testimonials')

@section('content')

  <div class="card">
    @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif
    <h5 class="card-header">
    <div class="row">
      <div class="col-6">Testimonials</div>
      <div class="col-6 text-end"><a href="{{route('admin_testimonials.create')}}" class="btn btn-primary">Add New</a></div>
    </div>
    </h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <caption class="ms-4">List of Testimonials</caption>
        <thead>
        <tr>
          <th>ID</th>
          <th>Message</th>
          <th>Name</th>
          <th>Country</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @if(count($testimonials)>0)
          @foreach($testimonials as $testimonial)
            <tr>
              <td>{{$testimonial->id}}</td>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$testimonial->message}}</strong></td>
              <td>
                {{ $testimonial->name }}
              </td>
              <td>{{$testimonial->country}}</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('delete-form').submit();"><i class="bx bx-trash me-1"></i> Delete</a>
                    <form id="delete-form" action="{{ route('admin_testimonials.destroy', ['id' => $testimonial->id]) }}" method="POST" style="display: none;">
                      @csrf
                      @method('DELETE')
                    </form>
                  </div>
                </div>
              </td>
            </tr>
          @endforeach
        @endif
        </tbody>
      </table>
    </div>
  </div>
@endsection
