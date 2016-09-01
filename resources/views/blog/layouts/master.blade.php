<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $meta_description }}">
    <meta name="author" content="{{ config('blog.author') }}">

    <title>{{ $title or config('blog.title') }}</title>
    {{--<link rel="alternate" type="application/rss+xml" href="{{ url('rss') }}"--}}
          {{--title="RSS Feed {{ config('blog.title') }}">--}}

    {{-- Styles --}}
    <link href="/assets/css/blog.min.css" rel="stylesheet">
    @yield('styles')

  {{-- HTML5 Shim and Respond.js for IE8 support --}}
  <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@include('blog.partials.page-nav')

@yield('page-header')
@yield('content')

@include('blog.partials.page-footer')

{{-- Scripts --}}
<script src="/assets/js/blog.min.js"></script>
@yield('scripts')

</body>
</html>