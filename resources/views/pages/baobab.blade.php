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
                        <li class="breadcrumb-item"><a href="{{route('baobab.index')}}">Baobab</a></li>
                        <li class="breadcrumb-item active">information</li>
                    </ol>
                </div>
                <h4 class="page-title">Informations complètes</h4>
            </div>
        </div>
    </div>     
    <!-- end page title -->   
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-12 my-2">
                        <span class="bbe_info_title">Raison social : </span>  {{ $baobab->raison_social}}
                    </div>
                    <div class="col-12 my-2">
                        Régistre de commerce : {{ $baobab->rccm}}
                    </div>
                    <div class="col-12 my-2">
                        Numéro IFU : {{ $baobab->ifu}}
                    </div>
                    <div class="col-12 my-2">
                        Capital : {{ $baobab->capital}}
                    </div>
                    <div class="col-12 my-2">
                        Siège : {{ $baobab->siege}}
                    </div>
                    <div class="col-12 my-2">
                        Cntact : {{ $baobab->contact}}
                    </div>
                    <div class="col-12 my-2">
                        Domaine d'activité : {{ $baobab->domaine_activite}}
                    </div>
                    <div class="col-12 my-2">
                        Email : {{ $baobab->email}}
                    </div>
                    <div class="col-12 my-2">
                        Responsable : {{ $baobab->Responsable}}
                    </div>
                    <div class="col-12 my-2">
                        contacts du responsable  : {{ $baobab->contactsresponsable}}
                    </div>
                   
                    <div class="col-12 my-2">
                        Date d'ajout : {{ $baobab->created_at}}
                    </div> 
                    <div class="col-12 my-2">
                        Date la dernière modification : {{ $baobab->updated_at}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="{{ route("baobab.edit", $baobab->id )}}" class="btn btn-warning" >Modifier</a>
                    </div>

                </div>
                
            </div>
        </div>
    </div>

</div> <!-- end container-fluid -->
@endsection