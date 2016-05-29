@extends('blog.layouts.master', ['meta_description' => 'Contact Form'])

@section('page-header')
  <header class="intro-header"
          style="background-image: url('{{ page_image('about-bg.jpg') }}')">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <div class="site-heading">
            <h1>About Me</h1>
            <hr class="small">
            <h2 class="subheading">
              Have questions? I have answers (maybe).
            </h2>
          </div>
        </div>
      </div>
    </div>
  </header>
@stop

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        @include('admin.partials.errors')
        @include('admin.partials.success')
        <p>
          Hallo, saya misterebs. Blog ini saya bangun sebagai dokumentasi
          dan sarana interaksi saya sebagai tenaga freelancer di bidang TI.
        </p>
        <p>
          Saya pengguna linux ubuntu dan laravel framwork unutk mendukung hobi
          dan pekerjaan saya.
        </p>
        
      </div>
    </div>
  </div>
@endsection
