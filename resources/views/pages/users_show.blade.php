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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Utilisateurs</a></li>
                        <li class="breadcrumb-item active">Création</li>
                    </ol>
                </div>
                <h4 class="page-title">Détails d'un utilisateur</h4>
            </div>
        </div>
    </div>     
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-9">
            <div class="card-box">
                <h4 class="header-title"> d'ajout d'utilisateur</h4>
                <p class="sub-header">
                    Remplissez  tout les champs obligatoire.
                </p>
                <form class="form-horizontal" method="POST" action="{{ route('login') }}" >
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="name" >{{ __('Nom et prénom') }}</label>
                            <input id="name" disabled type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                        
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input id="email" disabled type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="privilege">{{ __('Privilège') }}</label>
                            <select id="inputState" disabled class="form-control @error('privilege') is-invalid @enderror" name="privilege" value="{{ $user->prililege }}" required autocomplete="privilege">
                                <option value="1">Admin</option>
                                <option value="2">Utilisateur</option>
                                <option value="3">invité</option>
                            </select>
                        </div>
                    </div>
                    <a type="submit" href="{{route('user.index')}}" class="btn btn-primary">Retour</a>
                    <a type="submit" href="{{ route('user.edit',$user->id) }}" class="btn btn-warning">Modifer</a>
                </form>
            </div>
        </div>
    </div>    
    <!-- end page title -->     
</div> <!-- end container-fluid -->
@endsection