@extends('layouts.default')


@section('styles')
<link href="{!! asset('assets/libs/summernote/summernote-bs4.css') !!}" rel="stylesheet" type="text/css" />
@endsection

@section('content')


<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('baux.index') }}">Baux</a></li>
                        <li class="breadcrumb-item active">Création</li>
                    </ol>
                </div>
                <h4 class="page-title">Créations d'un utilisateur</h4>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-12">
            <div class="card-box">
                <h4 class="header-title">Formulaire d'ajout d'un bail</h4>
                <p class="sub-header">
                    Remplissez  tout les champs obligatoire.
                </p>
               
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="name" >Titre du contrat</label>
                            <input id="name" type="text" class="form-control" name="titre_contract" value="{{  $baux->titre_contract }}" required autocomplete="name" autofocus >                       
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name" >Numéro du contrat</label>
                            <input id="name" type="number" class="form-control" name="numero_contract" value="{{  $baux->numero_contract }}" required autocomplete="name" autofocus >                       
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="name" >Partie Prenante</label>
                            <input id="name" type="number" class="form-control" name="" value="{{  $baux->partie_prenante }}" required autocomplete="name" autofocus >                       

                        </div>
                        <div class="form-group col-md-6">
                            <label for="name" >Partie adverse</label>
                            <input id="name" type="number" class="form-control" name="part" value="{{  $baux->partie_adverse }}" required autocomplete="name" autofocus >                       
  
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" >Articles</label>
                        <hr>
                        
                        <div class="form-group col-md-2">
                            <label for="name" >Articles</label>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name" >Titre</label>
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="name" >Contenu</label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="name" >Date debut</label>
                            <input id="name" type="date" class="form-control" name="date_debut" value="{{  $baux->date_debut }}" required autocomplete="date_debut"  >                       
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name" >Date Fin</label>
                            <input id="name" type="date" class="form-control" name="date_fin" value="{{  $baux->date_fin }}" required autocomplete="date_fin"  >                       
                        </div>
                    </div>
                       
                    <a href="{{route('baux.index')}}" class="btn btn-primary">Retour</a>
                    <a href="{{route('baux.edit',$baux->id)}}" class="btn btn-warning">Modifier</a>
                
            </div>
        </div>
    </div>    
    <!-- end page title -->     
</div> <!-- end container-fluid -->
@endsection


@section('scripts')                                    
<script>
    $("document").ready(function () {
        $("#addpar").click(function () {
            $("#tbltime").append('<div class="form-group row todelet"><div class="form-group col-md-1"><input id="name" type="text" class="form-control" name="name" value="" placeholder="Numero" required autocomplete="name" autofocus ></div><div class="form-group col-md-4"><input id="name" type="number" class="form-control" name="name" value="" placeholder="Titre" required autocomplete="name" autofocus ></div><div class="form-group col-md-7"><input id="name" type="number" class="form-control" name="name" value="" placeholder="contenu" required autocomplete="name" autofocus></div></div>');
        });
        $(document).on('click', '.del', function () {
            $(this).closest(".todelet").remove();
        });   
    });
</script>

    <!-- Summernote js -->
    <script src="{!! asset('assets/libs/summernote/summernote-bs4.min.js') !!}"></script>


    <!-- Init js -->
    <script src="{!! asset('assets/js/pages/form-summernote.init.js') !!}"></script>

@endsection