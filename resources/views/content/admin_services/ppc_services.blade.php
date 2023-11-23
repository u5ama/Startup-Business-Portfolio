@extends('layouts/contentNavbarLayout')

@section('title', ' Graphic Services')

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
          <h5 class="mb-0">Graphic Designing Settings</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('admin-ppc-service-save') }}" method="POST">
            @csrf

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="banner_image">Banner Image</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" id="banner_image" name="banner_image" />
                @error('banner_image')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="image_one">First Image</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" id="image_one" name="image_one" />
                @error('image_one')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="image_two">Second Image</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" id="image_two" name="image_two" />
                @error('image_two')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 1</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="slug">Slug</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{$service->slug?? null}}" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_one_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_one_title" name="section_one_title" placeholder="Title" value="{{$service->section_one_title?? null}}" />
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
            {{--<div class="card-header d-flex align-items-center justify-content-between">
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
              <h6 class="mb-0">Section # 2 Box 6</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_six_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_two_box_six_title" name="section_two_box_six_title" placeholder="Title" value="{{$service->section_two_box_six_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_two_box_six_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor6" name="section_two_box_six_text">{{ $service->section_two_box_six_text ?? null}}</textarea>
              </div>
            </div>--}}


            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 3</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_four_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_four_title" name="section_four_title" placeholder="Title" value="{{$service->section_four_title?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_four_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor7" name="section_four_text">{{ $service->section_four_text?? null }}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 4</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_five_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_five_title" name="section_five_title" placeholder="Title" value="{{$service->section_five_title?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_five_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor8" name="section_five_text">{{ $service->section_five_text?? null }}</textarea>
              </div>
            </div>


            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 5</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_three_title" name="section_three_title" placeholder="Title" value="{{$service->section_three_title?? null}}"/>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 5 Box 1</h6>
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
              <h6 class="mb-0">Section # 5 Box 2</h6>
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
                <textarea id="editor14" name="section_three_box_two_text">{{ $service->section_three_box_two_text ?? null}}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 5 Box 3</h6>
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

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 5 Box 4</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_box_four_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_three_box_four_title" name="section_three_box_four_title" placeholder="Title" value="{{$service->section_three_box_four_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_box_four_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor6" name="section_three_box_four_text">{{ $service->section_three_box_four_text ?? null}}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 5 Box 5</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_box_five_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_three_box_five_title" name="section_three_box_five_title" placeholder="Title" value="{{$service->section_three_box_five_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_box_five_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor5" name="section_three_box_five_text">{{ $service->section_three_box_five_text ?? null}}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 5 Box 6</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_box_six_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_three_box_six_title" name="section_three_box_six_title" placeholder="Title" value="{{$service->section_three_box_six_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_box_six_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor4" name="section_three_box_six_text">{{ $service->section_three_box_six_text ?? null}}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 5 Box 7</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_box_seven_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_three_box_seven_title" name="section_three_box_seven_title" placeholder="Title" value="{{$service->section_three_box_seven_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_box_seven_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor3" name="section_three_box_seven_text">{{ $service->section_three_box_seven_text ?? null}}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 5 Box 8</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_box_eight_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_three_box_eight_title" name="section_three_box_eight_title" placeholder="Title" value="{{$service->section_three_box_eight_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_box_eighttext">Text</label>
              <div class="col-sm-10">
                <textarea id="editor2" name="section_three_box_eight_text">{{ $service->section_three_box_eight_text ?? null}}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 5 Box 9</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_box_nine_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_three_box_nine_title" name="section_three_box_nine_title" placeholder="Title" value="{{$service->section_three_box_nine_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_three_box_nine_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor1" name="section_three_box_nine_text">{{ $service->section_three_box_nine_text ?? null}}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 6</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_six_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_six_title" name="section_six_title" placeholder="Title" value="{{$service->section_six_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_six_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor9" name="section_six_text">{{ $service->section_six_text ?? null}}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 6 FAQ 1</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_six_faq_one_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_six_faq_one_title" name="section_six_faq_one_title" placeholder="Title" value="{{$service->section_six_faq_one_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_six_faq_one_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor11" name="section_six_faq_one_text">{{ $service->section_six_faq_one_text ?? null}}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 6 FAQ 2</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_six_faq_two_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_six_faq_two_title" name="section_six_faq_two_title" placeholder="Title" value="{{$service->section_six_faq_two_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_six_faq_two_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor20" name="section_six_faq_two_text">{{ $service->section_six_faq_two_text ?? null}}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 6 FAQ 3</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_six_faq_three_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_six_faq_three_title" name="section_six_faq_three_title" placeholder="Title" value="{{$service->section_six_faq_three_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_six_faq_three_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor21" name="section_six_faq_three_text">{{ $service->section_six_faq_three_text ?? null}}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 6 FAQ 4</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_six_faq_four_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_six_faq_four_title" name="section_six_faq_four_title" placeholder="Title" value="{{$service->section_six_faq_four_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_six_faq_four_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor22" name="section_six_faq_four_text">{{ $service->section_six_faq_four_text ?? null}}</textarea>
              </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-between">
              <h6 class="mb-0">Section # 6 FAQ 5</h6>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_six_faq_five_title">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="section_six_faq_five_title" name="section_six_faq_five_title" placeholder="Title" value="{{$service->section_six_faq_five_title ?? null}}"/>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="section_six_faq_five_text">Text</label>
              <div class="col-sm-10">
                <textarea id="editor23" name="section_six_faq_five_text">{{ $service->section_six_faq_five_text ?? null}}</textarea>
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
