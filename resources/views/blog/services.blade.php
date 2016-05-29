@extends('blog.layouts.master', ['meta_description' => 'Contact Form'])

@section('page-header')
  <header class="intro-header"
          style="background-image: url('{{ page_image('services1-bg.jpg') }}')">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <div class="site-heading">
            <h1>Managed VPS</h1>
            <hr class="small">
            <h2 class="subheading">
              Managed VPS Wordpress & Laravel Framework.
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
          The BudgetVM OpenVZ SSD Cached VPS Servers are powered by the latest Intel Hardware including extremely fast SSD Drives with Enterprise Raid protected storage for high performance. Each OpenVZ SSD Cached VPS includes our advanced features for instant upgrades, DDOS protection, 160Gbps network and 24/7 Support.
        </p>
        <p>
  
  <table class="table table-hover">
  <thead>
    <tr class="active">
      <td></td>
      <td><b>Paket 512MB</b></td>
      <td><b>Paket 1GB</b></td>
      <td><b>Paket 2GB</b></td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>CPU Cores</td>
      <td>1 CPU</td>
      <td>1 CPU</td>
      <td>2 CPU</td>
    </tr>
    <tr>
      <td>Storage</td>
      <td>50GB</td>
      <td>100GB</td>
      <td>150GB</td>
    </tr>
    <tr>
      <td>RAM</td>
      <td>512MB</td>
      <td>1GB</td>
      <td>1GB</td>
    </tr>
    <tr>
      <td>vSwap</td>
      <td>256MB</td>
      <td>512MB</td>
      <td>1GB</td>
    </tr>
    <tr>
      <td>Transfer</td>
      <td>2TB</td>
      <td>3TB</td>
      <td>4TB</td>
    </tr>
    <tr>
      <td>IPv4</td>
      <td>1</td>
      <td>2</td>
      <td>2</td>
    </tr>
    <tr>
      <td>IPv6</td>
      <td>1</td>
      <td>2</td>
      <td>2</td>
    </tr>
    <tr>
      <td>Port Speed</td>
      <td>1Gbps</td>
      <td>1Gbps</td>
      <td>1Gbps</td>
    </tr>
    <tr>
      <td>100% Uptime</td>
      <td><i class="glyphicon glyphicon-ok-circle text-success"></i></td>
      <td><i class="glyphicon glyphicon-ok-circle text-success"></i></td>
      <td><i class="glyphicon glyphicon-ok-circle text-success"></i></td>
    </tr>
    <tr>
      <td>DDOS Protected</td>
      <td><i class="glyphicon glyphicon-ok-circle text-success"></i></td>
      <td><i class="glyphicon glyphicon-ok-circle text-success"></i></td>
      <td><i class="glyphicon glyphicon-ok-circle text-success"></i></td>
    </tr>
    
  </tbody>
  </div>
  </div>
  </table>
        
  
  <table class="table table-hover">
  <thead>
    <tr class="active">
      <td><h3>Built-in Server :</h3></td>
      <td></td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Nginx Stable 1.8.1</td>
      <td><i class="glyphicon glyphicon-ok-circle text-success"></td>
    </tr>
    <tr>
      <td>PHP 7.0-fpm</td>
      <td><i class="glyphicon glyphicon-ok-circle text-success"></td>
    </tr>
    <tr>
      <td>MySQL/MariaBD</td>
      <td><i class="glyphicon glyphicon-ok-circle text-success"></td>
    </tr>
    <tr>
      <td>Phpmyadmin</td>
      <td><i class="glyphicon glyphicon-ok-circle text-success"></td>
    </tr>
    <tr>
      <td>HHVM V. 3.9.0</td>
      <td><i class="glyphicon glyphicon-ok-circle text-success"></td>
    </tr>
    <tr>
      <td>NGX_Pagespeed</td>
      <td><i class="glyphicon glyphicon-ok-circle text-success"></td>
    </tr>
    <tr>
      <td>Node.js</td>
      <td><i class="glyphicon glyphicon-ok-circle text-success"></td>
    </tr>
    <tr>
      <td>Bower</td>
      <td><i class="glyphicon glyphicon-ok-circle text-success"></td>
    </tr>
    <tr>
      <td>Gulp</td>
      <td><i class="glyphicon glyphicon-ok-circle text-success"></td>
    </tr>
    <tr>
      <td>Wordpress 4.1</td>
      <td><i class="glyphicon glyphicon-ok-circle text-success"></td>
    </tr>
    <tr>
      <td><a href="https://laravel.com/docs/5.1" target="_blank">Laravel 5.1</a></td>
      <td><i class="glyphicon glyphicon-ok-circle text-success"></td>
    </tr>
    <tr>
      <td>AdminLTE V.2.3.2</td>
      <td><i class="glyphicon glyphicon-ok-circle text-success"></td>
    </tr>
       
  </tbody>
  </div>
  </div>
  </table>
      </div>
    </div>
  </div>
@endsection
