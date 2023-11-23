@extends('layouts/contentNavbarLayout')

@section('title', ' Contact Us Form')

@section('content')

  <div class="card">
    @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif
    <h5 class="card-header">
      <div class="row">
        <div class="col-6">Contact Form Details</div>
      </div>
    </h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <caption class="ms-4">List of Contact Form Details</caption>
        <thead>
        <tr>
          <th>ID</th>
          <th>Email</th>
          <th>Name</th>
          <th>Service Name</th>
          <th>Message</th>
        </tr>
        </thead>
        <tbody>
        @if(count($contacts)>0)
          @foreach($contacts as $contact)
            <tr>
              <td>{{$contact->id}}</td>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$contact->email}}</strong></td>
              <td>
                {{ $contact->name }}
              </td>
              <td>{{$contact->service_name}}</td>
              <td>{{$contact->message}}</td>
            </tr>
          @endforeach
        @endif
        </tbody>
      </table>
    </div>
  </div>
@endsection
