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
                            <input id="raison_social" type="text" class="form-control " name="raison_social" value="{{old('raison_social')}}" required autocomplete="raison_social" autofocus>                       
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="rccm" >RCCM</label> <span class="text-danger">*</span>
                            <input id="rccm" type="text" class="form-control" name="rccm" value="{{old('rccm')}}" required autocomplete="rccm" >    
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ifu" >IFU</label> <span class="text-danger">*</span>
                            <input id="ifu" type="text" class="form-control" name="ifu" value="{{old('ifu')}}" required autocomplete="ifu" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="siege" >Siège</label> <span class="text-danger">*</span>
                            <input id="siege" type="text" class="form-control" name="siege" value="{{old('siege')}}" required autocomplete="siege" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="contact" >Contact</label> <span class="text-danger">*</span>
                            <input id="contact" type="tel" class="form-control" name="contact" value="{{old('contact')}}" required autocomplete="contact" >
                       </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="capital" >Capital</label> <span class="text-danger">*</span>
                            <input id="capital" type="number" class="form-control" name="capital" value="" required autocomplete="capital" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="domaine_activite" >Domaine d'activité</label> <span class="text-danger">*</span>
                            <input id="domaine_activite" type="text" class="form-control" name="domaine_activite" value="{{old('domaine_activite')}}" required autocomplete="domaine_activite" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="email" >Email</label> <span class="text-danger">*</span>
                            <input id="email" type="email" class="form-control" name="email" value="{{old('email')}}" required autocomplete="email" >     
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="responsable" >Responsable</label> <span class="text-danger">*</span>
                            <input id="responsable" type="text" class="form-control"  name="responsable" value="{{old('responsable')}}" required autocomplete="Responsable" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="contact_responsable" >Contact du respnsable</label><span class="text-danger">*</span>
                            <input id="contact_responsable" type="tel" class="form-control " name="contact_responsable" value="{{old('contact_responsable')}}" required autocomplete="contact_responsable" >     
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
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