@extends('layouts/contentNavbarLayout')

@section('title', ' About Us')

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
          <h5 class="mb-0">About Us Settings</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('admin-about-save') }}" method="POST">
            @csrf
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 1</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_one_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_one_title" name="section_one_title" placeholder="Title" value="{{$about->section_one_title}}" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_one_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor12" name="section_one_text">{{ $about->section_one_text }}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 2</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_two_title" name="section_two_title" placeholder="Title" value="{{$about->section_two_title}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor10" name="section_two_text">{{ $about->section_two_text }}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 2 FAQS 1</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_faq_one_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_two_faq_one_title" name="section_two_faq_one_title" placeholder="Title" value="{{$about->section_two_faq_one_title}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_faq_one_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor13" name="section_two_faq_one_text">{{ $about->section_two_faq_one_text }}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 2 FAQS 2</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_faq_two_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_two_faq_two_title" name="section_two_faq_two_title" placeholder="Title" value="{{$about->section_two_faq_two_title}}" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_faq_two_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor14" name="section_two_faq_two_text">{{ $about->section_two_faq_two_text }}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 2 FAQS 3</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_faq_three_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_two_faq_three_title" name="section_two_faq_three_title" placeholder="Title" value="{{$about->section_two_faq_three_title}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_faq_three_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor15" name="section_two_faq_three_text">{{ $about->section_two_faq_three_text }}</textarea>
              </div>
            </div>


            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 2 Box 1</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_one_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_two_box_one_title" name="section_two_box_one_title" placeholder="Title" value="{{$about->section_two_box_one_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_one_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor17" name="section_two_box_one_text">{{ $about->section_two_box_one_text ?? null}}</textarea>
              </div>
            </div>
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 2 Box 2</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_two_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_two_box_two_title" name="section_two_box_two_title" placeholder="Title" value="{{$about->section_two_box_two_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_two_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor18" name="section_two_box_two_text">{{ $about->section_two_box_two_text ?? null}}</textarea>
              </div>
            </div>
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 2 Box 3</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_three_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_two_box_three_title" name="section_two_box_three_title" placeholder="Title" value="{{$about->section_two_box_three_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_three_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor19" name="section_two_box_three_text">{{ $about->section_two_box_three_text ?? null}}</textarea>
              </div>
            </div>


            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 3</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_video_url">Video URL</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_three_video_url" name="section_three_video_url" placeholder="Video URL" value="{{ $about->section_three_video_url }}"/>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 4</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_four_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_four_title" name="section_four_title" placeholder="Title" value="{{ $about->section_four_title }}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_four_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor16" name="section_four_text">{{ $about->section_four_text }}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 4 Box 1</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_four_box_one_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_four_box_one_title" name="section_four_box_one_title" placeholder="Title" value="{{ $about->section_four_box_one_title }}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_four_box_one_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor1" name="section_four_box_one_text">{{$about->section_four_box_one_text}}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 4 Box 2</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_four_box_two_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_four_box_two_title" name="section_four_box_two_title" placeholder="Title" value="{{$about->section_four_box_two_title}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_four_box_two_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor2" name="section_four_box_two_text">{{$about->section_four_box_two_text}}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 4 Box 3</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_four_box_three_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_four_box_three_title" name="section_four_box_three_title" placeholder="Title" value="{{$about->section_four_box_three_title}}" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_four_box_three_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor3" name="section_four_box_three_text">{{$about->section_four_box_three_text}}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 4 Box 4</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_four_box_four_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_four_box_four_title" name="section_four_box_four_title" placeholder="Title" value="{{$about->section_four_box_four_title}}" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_four_box_four_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor20" name="section_four_box_four_text">{{$about->section_four_box_four_text}}</textarea>
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
