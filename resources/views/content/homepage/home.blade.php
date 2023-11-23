@extends('layouts/contentNavbarLayout')

@section('title', ' HomePage')

@section('content')
  <div class="row">
    <!-- Basic Layout -->
    @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">HomePage Settings</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('admin-homepage-save') }}" method="POST">
            @csrf
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Slider</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="slider_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="slider_title" name="slider_title" placeholder="Slider Title" value="{{$home->slider_title}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="slider_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor1" name="slider_text">{{$home->slider_text}}</textarea>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="slider_video_url">Video URL</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="slider_video_url" name="slider_video_url" placeholder="Video URL" value="{{$home->slider_video_url}}"/>
              </div>
            </div>

            {{--Section 1--}}
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 2</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_two_title" name="section_two_title" placeholder="Section Title" value="{{$home->section_two_title}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor2" name="section_two_text">{{$home->section_two_text}}</textarea>
              </div>
            </div>
            
            {{--Section 2-a--}}
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 2a</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_a_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_two_a_title" name="section_two_a_title" placeholder="Section Title" value="{{$home->section_two_a_title}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_a_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor15" name="section_two_a_text">{{$home->section_two_a_text}}</textarea>
              </div>
            </div>
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 2a Box 1</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_one_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_two_box_one_title" name="section_two_box_one_title" placeholder="Title" value="{{$home->section_two_box_one_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_one_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor17" name="section_two_box_one_text">{{ $home->section_two_box_one_text ?? null}}</textarea>
              </div>
            </div>
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 2a Box 2</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_two_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_two_box_two_title" name="section_two_box_two_title" placeholder="Title" value="{{$home->section_two_box_two_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_two_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor18" name="section_two_box_two_text">{{ $home->section_two_box_two_text ?? null}}</textarea>
              </div>
            </div>
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 2a Box 3</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_three_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_two_box_three_title" name="section_two_box_three_title" placeholder="Title" value="{{$home->section_two_box_three_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_three_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor19" name="section_two_box_three_text">{{ $home->section_two_box_three_text ?? null}}</textarea>
              </div>
            </div>
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 2a Box 4</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_four_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_two_box_four_title" name="section_two_box_four_title" placeholder="Title" value="{{$home->section_two_box_four_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_four_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor20" name="section_two_box_four_text">{{ $home->section_two_box_four_text ?? null}}</textarea>
              </div>
            </div>
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 2a Box 5</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_five_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_two_box_five_title" name="section_two_box_five_title" placeholder="Title" value="{{$home->section_two_box_five_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_five_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor10" name="section_two_box_five_text">{{ $home->section_two_box_five_text ?? null}}</textarea>
              </div>
            </div>

            {{--Section 3--}}
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 3</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_part_one_title">Box 1 Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_three_part_one_title" name="section_three_part_one_title" placeholder="Section Title" value="{{$home->section_three_part_one_title}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_part_one_text">Box 1 Text</label>
              <div class="col-sm-10">
                <textarea id="editor3" name="section_three_part_one_text">{{$home->section_three_part_one_text}}</textarea>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_part_two_title">Box 2 Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_three_part_two_title" name="section_three_part_two_title" placeholder="Section Title" value="{{$home->section_three_part_two_title}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_part_two_text">Box 2 Text</label>
              <div class="col-sm-10">
                <textarea id="editor4" name="section_three_part_two_text">{{$home->section_three_part_two_text}}</textarea>
              </div>
            </div>

            {{--Section 4--}}
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 4</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_four_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_four_title" name="section_four_title" placeholder="Section Title" value="{{$home->section_four_title}}" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_four_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor5" name="section_four_text">{{$home->section_four_text}}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 4 FAQS</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_four_faq_one_title">FAQ 1 Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_four_faq_one_title" name="section_four_faq_one_title" placeholder=" Title" value="{{$home->section_four_faq_one_title}}" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_four_faq_one_text">FAQ 1 Text</label>
              <div class="col-sm-10">
                <textarea id="editor6" name="section_four_faq_one_text">{{$home->section_four_faq_one_text}}</textarea>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_four_faq_two_title">FAQ 2 Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_four_faq_two_title" name="section_four_faq_two_title" placeholder=" Title" value="{{$home->section_four_faq_two_title}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_four_faq_two_text">FAQ 2 Text</label>
              <div class="col-sm-10">
                <textarea id="editor7" name="section_four_faq_two_text">{{$home->section_four_faq_two_text}}</textarea>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_four_faq_three_title">FAQ 3 Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_four_faq_three_title" name="section_four_faq_three_title" placeholder=" Title" value="{{$home->section_four_faq_three_title}}" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_four_faq_three_text">FAQ 3 Text</label>
              <div class="col-sm-10">
                <textarea id="editor8" name="section_four_faq_three_text">{{$home->section_four_faq_three_text}}</textarea>
              </div>
            </div>

            {{--Section 5--}}
            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 5</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_seven_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_seven_title" name="section_seven_title" placeholder="Section Title" value="{{$home->section_seven_title}}" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_seven_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor9" name="section_seven_text">{{$home->section_seven_text}}</textarea>
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
