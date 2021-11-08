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
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('baux.index')}}">baux</a></li>
                        <li class="breadcrumb-item active">Modification</li>
                    </ol>
                </div>
                <h4 class="page-title">Ajout de bails</h4>
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
                <form class="form-horizontal" action="{{ route('baux.update', $baux->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="name" >Titre du contrat</label>
                            <input id="name" type="text" class="form-control" name="titre_contract" value="{{ $baux->titre_contract }}"  required autocomplete="name" autofocus >                       
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name" >Numéro du contrat</label>
                            <input id="name" type="number" class="form-control" name="numero_contract" value="{{ $baux->numero_contract }}"  required autocomplete="name" autofocus >                       
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="name" >Partie Prenante</label>
                            <select id="inputState" class="form-control " name="partie_prenante" value="{{ $baux->partie_prenante }}"  required autocomplete="privilege">
                                @foreach ($baobab as $baobab)
                                    <option value="{{ $baobab->id }}">{{ $baobab->raison_social}}</option>
                                @endforeach 
                                @foreach ($parties as $partie)
                                    <option value="{{ $partie->id}}">{{ $partie->raison_social}}</option>
                                @endforeach  
                            </select>      
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name" >Partie adverse</label>
                            <select id="inputState" class="form-control " name="partie_adverse" value="{{ $baux->partie_adverse }}"  required autocomplete="privilege">
                                @foreach ($parties as $partie)
                                    <option value="{{ $partie->id}}">{{ $partie->raison_social}}</option>
                                @endforeach  
                            </select>     
                        </div>
                    </div>
                    {{-- Show old articles --}}
                    <div class="form-group row">
                        @foreach ($articles as $article)
                          @if ($baux->id == $article->baux_id)
                            <span>Article N° {{$article->article}} : </span>  {{$article->title}}
                            <div class="form-group col-md-12">
                                <label for="name" >Articles</label>
                                <div class="form-group">
                                    <div class="row ">
                                        <div class="col s12">
                                            <div id="tbltime">
                                                <div class="form-group row todelet">
                                                    <form class="form-horizontal" action="{{ route('articles.update', $article->id ) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group col-10">
                                                            <div class="row">
                                                                <div class="col-2">
                                                                    <input id="name" type="text" class="form-control" name="name" value="Article N° {{$article->article}}" placeholder="Numero" required autocomplete="name" autofocus >                       
                                                                </div> 
                                                                <div class="col-10">
                                                                    <input id="name" type="text" class="form-control" name="name" value="{{$article->title}} " placeholder="titre" required autocomplete="name" autofocus >                       
                                                                </div>
                                                            </div>
                                                            <div class="row pt-2 form-group">
                                                                <div class="col-12">
                                                                    <textarea  class="summernote" name="" id="" cols="30" rows="10">{{ $article->content  }}</textarea>
                                                                </div>
                                                            </div>                    
                                                        </div>
                                                        <div class="form-group col-2">
                                                            {{-- <a data-toggle="modal" id="smallButton1" data-target="#smallModal1" data-attr="{{ route('articles.delete', $article->id) }}" title="supprimer" class="btn btn-danger my-1"><i class="fa fa-trash-alt mr-1" ></i>
                                                            </a> --}}
                                                            <a class="btn btn-success">c</a>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    
                                   
                                </div>
                            </div>
                          @else
                          Aucun acrticle ajouter pour le moment
                          @endif 
                        @endforeach
                    </div> 
                    <div class="form-group row">
                        <a data-toggle="modal" id="smallButton" data-target="#exampleModalCenter" data-attr="{{ route('articles.add', $baux->id ) }}" title="ajout" class="btn btn-success my-1">Ajouter un article
                        </a>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label for="name" >Date debut</label>
                            <input id="name" type="date" class="form-control" name="date_debut" value="{{ $baux->date_debut }}"  required autocomplete="date_debut"  >                       
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name" >Date Fin</label>
                            <input id="name" type="date" class="form-control" name="date_fin" value="{{ $baux->date_fin }}"  required autocomplete="date_fin"  >                       
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier </button>
                </form>
            </div>
        </div>
    </div>    
    <!-- end page title -->     
</div> <!-- end container-fluid -->


<!-- small modal -->
{{-- <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="smallBody">
                <div>
                    <!-- the result to be displayed apply here -->
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- modal -->

<!-- small modal -->
<div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="smallBody">
                <div>
                    <!-- the result to be displayed apply here -->
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Article</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="smallBody">
            <div>
                <!-- the result to be displayed apply here -->
            </div>
       
      </div>
    </div>
  </div>
@endsection

@section('scripts') 
{{-- <script>
    // display a modal (small modal)
    $(document).on('click', '#smallButton1', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href
            , beforeSend: function() {
                $('#loader').show();
            },
            // return the result
            success: function(result) {
                $('#smallModal1').modal("show");
                $('#smallBody').html(result).show();
            }
            , complete: function() {
                $('#loader').hide();
            }
            , error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                $('#loader').hide();
            }
            , timeout: 8000
        })
    });

</script> --}}


<script>
    // display a modal (small modal)
    $(document).on('click', '#smallButton', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href
            , beforeSend: function() {
                $('#loader').show();
            },
            // return the result
            success: function(result) {
                $('#exampleModalCenter').modal("show");
                $('#smallBody').html(result).show();
            }
            , complete: function() {
                $('#loader').hide();
            }
            , error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                $('#loader').hide();
            }
            , timeout: 8000
        })
    });

</script>

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