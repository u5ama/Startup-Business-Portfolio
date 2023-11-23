@extends('layouts/contentNavbarLayout')

@section('title', ' Get Offer Form')

@section('content')

  <div class="card">
    @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif
    <h5 class="card-header">
      <div class="row">
        <div class="col-6">Get Offer Form Details</div>
      </div>
    </h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <caption class="ms-4">List of Offers Form Details</caption>
        <thead>
        <tr>
          <th>ID</th>
          <th>Email</th>
          <th>Name</th>
          <th>Company Name</th>
          <th>Service Name</th>
          <th>Message</th>
        </tr>
        </thead>
        <tbody>
        @if(count($offers)>0)
          @foreach($offers as $offer)
            <tr>
              <td>{{$offer->id}}</td>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$offer->email}}</strong></td>
              <td>
                {{ $offer->name }}
              </td>
              <td>{{$offer->agency_name}}</td>
              <td>{{$offer->service_name}}</td>
              <td>{{$offer->offer}}</td>
            </tr>
          @endforeach
        @endif
        </tbody>
      </table>
    </div>
  </div>
@endsection
