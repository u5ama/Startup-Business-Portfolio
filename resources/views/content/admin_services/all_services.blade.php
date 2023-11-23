@extends('layouts/contentNavbarLayout')

@section('title', ' Services')

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
          <h5 class="mb-0">Service Page</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('admin-service-save') }}" method="POST">
            @csrf
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 1</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_one_title">Title</label>
              <div class="col-sm-10">
                <textarea id="editor11" name="section_one_title">{{ $service->section_one_title?? null }}</textarea>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_one_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor12" name="section_one_text">{{ $service->section_one_text?? null }}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 2</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_two_title" name="section_two_title" placeholder="Title" value="{{$service->section_two_title?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor16" name="section_two_text">{{ $service->section_two_text?? null }}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 2 Box 1</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_one_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_two_box_one_title" name="section_two_box_one_title" placeholder="Title" value="{{$service->section_two_box_one_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_one_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor17" name="section_two_box_one_text">{{ $service->section_two_box_one_text ?? null}}</textarea>
              </div>
            </div>
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 2 Box 2</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_two_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_two_box_two_title" name="section_two_box_two_title" placeholder="Title" value="{{$service->section_two_box_two_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_two_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor18" name="section_two_box_two_text">{{ $service->section_two_box_two_text ?? null}}</textarea>
              </div>
            </div>
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 2 Box 3</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_three_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_two_box_three_title" name="section_two_box_three_title" placeholder="Title" value="{{$service->section_two_box_three_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_three_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor19" name="section_two_box_three_text">{{ $service->section_two_box_three_text ?? null}}</textarea>
              </div>
            </div>
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 2 Box 4</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_four_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_two_box_four_title" name="section_two_box_four_title" placeholder="Title" value="{{$service->section_two_box_four_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_four_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor20" name="section_two_box_four_text">{{ $service->section_two_box_four_text ?? null}}</textarea>
              </div>
            </div>
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 2 Box 5</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_five_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_two_box_five_title" name="section_two_box_five_title" placeholder="Title" value="{{$service->section_two_box_five_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_five_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor10" name="section_two_box_five_text">{{ $service->section_two_box_five_text ?? null}}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 3</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_three_title" name="section_three_title" placeholder="Title" value="{{$service->section_three_title?? null}}"/>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 3 Box 1</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_box_one_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_three_box_one_title" name="section_three_box_one_title" placeholder="Title" value="{{$service->section_three_box_one_title?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_box_one_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor13" name="section_three_box_one_text">{{ $service->section_three_box_one_text ?? null}}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 3 Box 2</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_box_two_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_three_box_two_title" name="section_three_box_two_title" placeholder="Title" value="{{$service->section_three_box_two_title ?? null}}" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_box_two_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor14" name="section_three_box_two_text">{{ $service->section_two_faq_two_text ?? null}}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 3 Box 3</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_box_three_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_three_box_three_title" name="section_three_box_three_title" placeholder="Title" value="{{$service->section_three_box_three_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_box_three_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor15" name="section_three_box_three_text">{{ $service->section_three_box_three_text ?? null}}</textarea>
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
