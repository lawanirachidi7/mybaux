@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('settings.index')}}"">Configuation</a></li>
                        <li class="breadcrumb-item active"></li>
                    </ol>
                </div>
                <h4 class="page-title">Configuraton général</h4>
            </div>
        </div>
    </div>   
    
    <div class="row d-flex justify-content-center align-items-center">
       <div class="row">
           <div class="col-12">
                <div class="card-box">

                </div>
           </div>
            
       </div>
    </div>
    <!-- end page title -->
</div> <!-- end container-fluid -->
@endsection
@section('scripts')
<!-- Styles -->

 <!-- Vendor js -->
    <script src="{!! asset('assets/js/vendor.min.js') !!}"></script>
    <script src="{!! asset('assets/libs/parsleyjs/parsley.min.js') !!}"></script>
    <!-- Validation init js-->
    <script src="{!! asset('assets/js/pages/form-validation.init.js') !!}"></script>
    <script src="{!! asset('assets/js/app.min.js') !!}"></script>
@endsection