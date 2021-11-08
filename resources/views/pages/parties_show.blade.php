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
                        <li class="breadcrumb-item"><a href="{{ route('baux.index')}}"">Baux</a></li>
                        <li class="breadcrumb-item active">Création</li>
                    </ol>
                </div>
                <h4 class="page-title">Création d'une partie</h4>
            </div>
        </div>
    </div>   
    
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-9">
            <div class="card-box">
                <h4 class="header-title">Formulaire d'ajout d'une  tiers partie</h4>
                <p class="sub-header">
                    Remplissez tout les champs obligatoire.
                </p>
            <form class="form-horizontal parsley-baobab" novalidate="" method="POST" action="{{ route('parties.store') }}" >
                @csrf
                <div class="form-group row">
                        <div class="form-group col-md-12">
                            <label for="social_reason" >Raison social</label> <span class="text-danger">*</span>
                            <input disabled  id="raison_social" type="text" class="form-control " name="raison_social" value="{{$parties->raison_social}}" required autocomplete="name" autofocus>                       
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="rccm" >RCCM</label> <span class="text-danger">*</span>
                            <input disabled  id="rccm" type="text" class="form-control" name="rccm" value="{{$parties->rccm}}" required autocomplete="name" >    
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ifu" >IFU</label> <span class="text-danger">*</span>
                            <input disabled  id="ifu" type="text" class="form-control" name="ifu" value="{{$parties->ifu}}" required autocomplete="name" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="siege" >Siège</label> <span class="text-danger">*</span>
                            <input disabled  id="siege" type="text" class="form-control" name="siege" value="{{$parties->siege}}" required autocomplete="name" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="contact" >Contact</label> <span class="text-danger">*</span>
                            <input disabled  id="contact" type="text" class="form-control" name="contact" value="{{$parties->contact}}" required autocomplete="name" >
                       </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="capital" >Capital</label> <span class="text-danger">*</span>
                            <input disabled  id="capital" type="text" class="form-control" name="capital" value="" required autocomplete="name" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="domaine_activite" >Domaine d'activité</label> <span class="text-danger">*</span>
                            <input disabled  id="domaine_activite" type="text" class="form-control" name="domaine_activite" value="{{$parties->domaine_activite}}" required autocomplete="name" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="email" >Email</label> <span class="text-danger">*</span>
                            <input disabled  id="email" type="text" class="form-control" name="email" value="{{$parties->email}}" required autocomplete="name" >     
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="responsable" >Responsable</label> <span class="text-danger">*</span>
                            <input disabled  id="responsable" type="text" class="form-control"  name="Responsable" value="{{$parties->Responsable}}" required autocomplete="name" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="contact_responsable" >Contact du respnsable</label><span class="text-danger">*</span>
                            <input disabled  id="contact_responsable" type="text" class="form-control " name="contactsresponsable" value="{{$parties->contactsresponsable}}" required autocomplete="name" >     
                        </div>
                    </div>
                    <a href="{{route("parties.index")}}" class="btn btn-primary">Retour</a>
                    <a class="btn btn-warning" href="{{ route("parties.edit",$parties->id) }}" ></i>Modifier</a>
                </form>
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