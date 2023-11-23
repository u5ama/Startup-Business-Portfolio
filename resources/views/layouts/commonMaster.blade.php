<!DOCTYPE html>

<html class="light-style layout-menu-fixed" data-theme="theme-default" data-assets-path="{{ asset('/assets') . '/' }}" data-base-url="{{url('/')}}" data-framework="laravel" data-template="vertical-menu-laravel-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>@yield('title') | Your Digital Resellers </title>
{{--  <meta name="description" content="{{ config('variables.templateDescription') ? config('variables.templateDescription') : '' }}" />
  <meta name="keywords" content="{{ config('variables.templateKeyword') ? config('variables.templateKeyword') : '' }}">--}}
  <!-- laravel CRUD token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

  <!-- Include Styles -->
  @include('layouts/sections/styles')

  <!-- Include Scripts for customizer, helper, analytics, config -->
  @include('layouts/sections/scriptsIncludes')
</head>

<body>
  <!-- Layout Content -->
  @yield('layoutContent')
  <!--/ Layout Content -->

  <!-- Include Scripts -->
  @include('layouts/sections/scripts')

  <script>
    ClassicEditor
      .create(document.querySelector('#editor1'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#editor2'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#editor3'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#editor4'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#editor5'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#editor6'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#editor7'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#editor8'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#editor9'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#editor10'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#editor11'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#editor12'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#editor13'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#editor14'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#editor15'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#editor16'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#editor17'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#editor18'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#editor19'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#editor20'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#editor21'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#editor22'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#editor23'))
      .catch(error => {
        console.error(error);
      });
    ClassicEditor
      .create(document.querySelector('#editor24'))
      .catch(error => {
        console.error(error);
      });
  </script>

</body>

</html>
