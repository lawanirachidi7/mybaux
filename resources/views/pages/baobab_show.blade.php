@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('baobab')}}">Baobab</a></li>
                        <li class="breadcrumb-item active">information</li>
                    </ol>
                </div>
                <h4 class="page-title">Information complète</h4>
            </div>
        </div>
    </div>     
    <!-- end page title -->     
</div> <!-- end container-fluid -->
@endsection