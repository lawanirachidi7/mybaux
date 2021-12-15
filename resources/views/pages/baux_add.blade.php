@extends('layouts.default')
@section('styles')
    <link href="{!! asset('assets/libs/datatables/dataTables.bootstrap4.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/libs/datatables/buttons.bootstrap4.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/libs/datatables/responsive.bootstrap4.css') !!}" rel="stylesheet" type="text/css" />
@endsection



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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Utilisateurs</a></li>
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
                <form class="form-horizontal" action="{{ route('baux.store') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="name" >Titre du contrat</label>
                            <input id="name" type="text" class="form-control" name="titre_contract" value="{{ old('titre_contract') }}" required autocomplete="name" autofocus >                       
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name" >Numéro du contrat</label>
                            <input id="name" type="number" class="form-control" name="numero_contract" value="{{ old('numero_contract') }}" required autocomplete="name" autofocus >                       
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="name" >Partie Prenante</label>
                            <select id="inputState" class="form-control " name="partie_prenante" value="{{ old('partie_prenante') }}" required autocomplete="privilege">
                                @foreach ($baobab as $baobab)
                                    <option value="{{ $baobab->raison_social }}">{{ $baobab->raison_social}}</option>
                                @endforeach 
                                {{-- @foreach ($parties as $partie)
                                    <option value="{{ $partie->raison_social}}">{{ $partie->raison_social}}</option>
                                @endforeach   --}}
                            </select>      
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name" >Partie adverse</label>
                            <select id="inputState" class="form-control " name="partie_adverse" value="{{ old('partie_adverse') }}" required autocomplete="privilege">
                                @foreach ($parties as $partie)
                                    <option value="{{ $partie->raison_social}}">{{ $partie->raison_social}}</option>
                                @endforeach  
                            </select>     
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="name" >Date debut</label>
                            <input id="name" type="date" class="form-control" name="date_debut" value="{{ old('date_debut') }}" required autocomplete="date_debut"  >                       
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name" >Date Fin</label>
                            <input id="name" type="date" class="form-control" name="date_fin" value="{{ old('date_fin') }}" required autocomplete="date_fin"  >                       
                        </div>
                    </div>
                       
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
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