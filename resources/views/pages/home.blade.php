@extends('layouts.default')

@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Baux</a></li>
                        <li class="breadcrumb-item active">Liste des baux</li>
                    </ol>
                </div>
                <h4 class="page-title">Lise des baux</h4>
            </div>
        </div>
    </div>     
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <!-- end page title -->     
</div> <!-- end container-fluid -->
@endsection

