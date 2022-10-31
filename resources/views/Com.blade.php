
@extends('layouts.NavCom')

@section('page')
<i class="fas fa-tachometer-alt"></i> Home
@endsection

@section('path')
Dashboard
@endsection


@section('content')
<div class="container-fluid" id="container-wrapper">




          <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
  

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">About</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                
                  </div>
                </div>
                <div class="card-body">
About Bookstore
               
                </div>
              </div>
            </div>
            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Services we offer</h6>
            
                <div class="card-body">
                  
                  
service we offer

                </div>
                <div class="card-footer text-center">
                  <a class="m-0 small text-primary card-link" href="#"> <i
                      class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </div>
            <!-- Invoice Example -->
           
            <!-- Message From Customer-->
    </div>
</div>
@endsection
