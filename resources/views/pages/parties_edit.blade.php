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
                        <li class="breadcrumb-item active">Modification</li>
                    </ol>
                </div>
                <h4 class="page-title">Liste des baux</h4>
            </div>
        </div>
    </div>     
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-9">
            <div class="card-box">
                <h4 class="header-title">Modification d'une  tiers partie</h4>
                <p class="sub-header">
                    Remplissez tout les champs obligatoire.
                </p>
            <form class="form-horizontal parsley-baobab" novalidate="" method="POST" action="{{ route('parties.update', $partie->id) }}" >
                @csrf
                @method('PUT')
                    <div class="form-group row">
                        <div class="form-group col-md-12">
                            <label for="social_reason" >Raison social</label> <span class="text-danger">*</span>
                            <input id="raison_social" type="text" class="form-control " name="raison_social" value="{{$partie->raison_social}}" required autocomplete="name" autofocus>                       
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="rccm" >RCCM</label> <span class="text-danger">*</span>
                            <input id="rccm" type="text" class="form-control" name="rccm" value="{{$partie->rccm}}" required autocomplete="name" >    
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ifu" >IFU</label> <span class="text-danger">*</span>
                            <input id="ifu" type="text" class="form-control" name="ifu" value="{{$partie->ifu}}" required autocomplete="name" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="siege" >Siège</label> <span class="text-danger">*</span>
                            <input id="siege" type="text" class="form-control" name="siege" value="{{$partie->siege}}" required autocomplete="name" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="contact" >Contact</label> <span class="text-danger">*</span>
                            <input id="contact" type="tel" class="form-control" name="contact" value="{{$partie->contact}}" required autocomplete="name" >
                       </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="capital" >Capital</label> <span class="text-danger">*</span>
                            <input id="capital" type="number" class="form-control" name="capital" value="{{$partie->capital}}" required autocomplete="name" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="domaine_activite" >Domaine d'activité</label> <span class="text-danger">*</span>
                            <input id="domaine_activite" type="text" class="form-control" name="domaine_activite" value="{{$partie->domaine_activite}}" required autocomplete="name" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="email" >Email</label> <span class="text-danger">*</span>
                            <input id="email" type="email" class="form-control" name="email" value="{{$partie->email}}" required autocomplete="name" >     
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="responsable" >Responsable</label> <span class="text-danger">*</span>
                            <input id="responsable" type="text" class="form-control"  name="Responsable" value="{{$partie->Responsable}}" required autocomplete="name" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="contact_responsable" >Contact du respnsable</label><span class="text-danger">*</span>
                            <input id="contact_responsable" type="tel" class="form-control " name="contact_responsable" value="{{$partie->contact_responsable}}" required autocomplete="name" >     
                        </div>
                    </div>
                    <a href="{{ route("parties.index")}}" class="btn btn-primary">Retour</a>
                    <button type="submit" class="btn btn-warning">Modifier</button>
                </form>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <!-- end page title -->     
</div> <!-- end container-fluid -->
@endsection
