<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="{{ $meta_description }}">
  <meta name="author" content="{{ config('blog.author') }}">

  <title>{{ $title or config('blog.title') }}</title>

  <link rel="alternate" type="application/rss+xml" href="{{ url('rss') }}"
        title="RSS Feed {{ config('blog.title') }}">

  {{-- Styles --}}
  <link href="/assets/css/blog.css" rel="stylesheet">
  <link href="{{asset('vendor/bower_dl/jquery/dist/jquery.min.js')}}" type="text/css"/>
  
  <!--Syntax Highlighting-->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/styles/default.min.css">
  
  <!--/SyntaxHighlighting-->

  <style type="text/css">
    #share-buttons img {
    width: 35px;
    padding: 5px;
    border: 0;
    box-shadow: 0;
    display: inline-block;
    }
  </style>

  @yield('styles')

  {{-- HTML5 Shim and Respond.js for IE8 support --}}
  <!--[if lt IE 9]>
  <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
@include('blog.partials.page-nav')

@yield('page-header')
@yield('content')

@include('blog.partials.page-footer')

{{-- Scripts --}}
<script src="/assets/js/blog.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

<script> 
$(document).ready(function() {
  $('pre code').each(function(i, block) {
    hljs.highlightBlock(block);
  });
});
</script>

@yield('scripts')

</body>
</html>
