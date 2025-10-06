<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>{{ $title ?? "Stepping Stone Public School" }}</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('theme/images/favicon.ico') }}">

  <!-- Google Fonts
		============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700" rel="stylesheet" type="text/css">

  <!-- Style CSS
		============================================ -->
  <link rel="stylesheet" href="{{ asset("theme/css/style.css") }}">

  <!-- Modernizr JS
		============================================ -->
  <script src="{{ asset('theme/js/modernizr-2.8.3.min.js') }}"></script>

  <!-- Google Icons
		============================================ -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=business_center" />
</head>