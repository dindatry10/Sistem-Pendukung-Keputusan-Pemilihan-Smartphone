@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')

@section('content')
<div class="card">
<div class="grid-margin">
  <div class="color-card-wrapper">
    <div class="card-body">
      <img class="img-fluid card-top-img w-100" src="{{asset('assets')}}/images/dashboard/img_5.jpg" alt="" />
      <div class="d-flex flex-wrap justify-content-around color-card-outer">
          <div class="color-card primary m-auto">
            <i class="mdi mdi-database"></i>
            <p class="font-weight-semibold mb-0">Data</p>
            <span class="small">15 Data</span>
          </div>    
          <div class="color-card bg-danger m-auto">
            <i class="mdi mdi-account-box-outline"></i>
            <p class="font-weight-semibold mb-0">User</p>
            <span class="small">7 Pengguna</span>
          </div>
      </div>
    </div>
<hr>
    <div class="template-demo">
      <a href="{{ route ('admin.rekomendasi') }}">
      <center><button type="button" class="btn btn-outline-primary btn-lg text-bg-light"><i class="mdi mdi-chevron-double-down"></i> Pilih Rekomendasi <i class="mdi mdi-chevron-double-down"></i></button></center>
      </a>
    </a>
    </div>
</div>
    
@endsection