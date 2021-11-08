@extends('layouts.default')
@section('styles')
    <link href="{!! asset('assets/libs/datatables/dataTables.bootstrap4.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/libs/datatables/buttons.bootstrap4.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/libs/datatables/responsive.bootstrap4.css') !!}" rel="stylesheet" type="text/css" />
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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Baux</a></li>
                        <li class="breadcrumb-item active">Liste</li>
                    </ol>
                </div>
                <h4 class="page-title">
                    Liste des baux
                </h4>
            </div>
        </div>
    </div>    
    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">
                <div class="row">
                    <div class="col-6">
                        <h4 class="header-title">Tableau des Baux</h4>
                        <p class="sub-header">
                            Liste complète des baux</code>.
                        </p>
                    </div>
                    <div class="col-6 d-flex justify-content-end ">
                       <a href="{{ route ('baux.create')}}" class="btn btn-success mb-4" > Ajouter une bails</a>
                    </div>
                </div>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr role="row">
                            <th>Titre du contrat</th>
                            <th>Numéro du contrat </th>
                            <th>Partie prenante</th>
                            <th>Partie adverse</th>
                            <th>Date de début</th>
                            <th>Date de fin</th>
                            <th>Options</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Baux as $baux)
                            <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1">{{$baux->titre_contract}}</td>
                                <td>{{$baux->numero_contract}}</td>
                                <td>{{$baux->partie_prenante}}</td>
                                <td>{{$baux->partie_adverse}}</td>
                                <td>{{$baux->date_debut}}</td>
                                <td>{{$baux->date_fin}}</td>
                               
                                <td>
                                    <a class="btn btn-primary my-2" href="{{ route("baux.show",$baux->id)}}" title="Afficher"><i class="fas fa-pencil-alt mr-1" ></i>Voir</a>
                                    <a class="btn btn-warning my-2" href="{{ route("baux.edit",$baux->id) }}"   title="Modifier"><i class="fas fa-pencil-alt mr-1" ></i>Modifier</a>
                                   
                                    {{-- <form action="{{ route('baux.destroy',$baux->id) }}" method="POST">
                                        @csrf                    
                                        @method('DELETE')         
                                        <button type="submit" class="btn btn-danger my-1"><i class="fa fa-trash-alt mr-1" ></i>Supprimer</button>
                                    </form> --}}
                                    <a data-toggle="modal" id="smallButton" data-target="#smallModal" data-attr="{{ route('baux.delete', $baux->id) }}" title="supprimer" class="btn btn-danger my-1"><i class="fa fa-trash-alt mr-1" ></i>Supprimer
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</div> <!-- end container-fluid -->

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

@endsection

@section('scripts')
<!-- Styles -->
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
                $('#smallModal').modal("show");
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


 <!-- Vendor js -->
 <script src="{!! asset('assets/js/vendor.min.js') !!}"></script>

 <!-- Required datatable js -->
 <script src="{!! asset('assets/libs/datatables/jquery.dataTables.min.js') !!}"></script>
 <script src="{!! asset('assets/libs/datatables/dataTables.bootstrap4.min.js') !!}"></script>
 <!-- Buttons examples -->
 <script src="{!! asset('assets/libs/datatables/dataTables.buttons.min.js') !!}"></script>
 <script src="{!! asset('assets/libs/datatables/buttons.bootstrap4.min.js') !!}"></script>
 <script src="{!! asset('assets/libs/jszip/jszip.min.js') !!}"></script>
 <script src="{!! asset('assets/libs/pdfmake/pdfmake.min.js') !!}"></script>
 <script src="{!! asset('assets/libs/pdfmake/vfs_fonts.js') !!}"></script>
 <script src="{!! asset('assets/libs/datatables/buttons.html5.min.js') !!}"></script>
 <script src="{!! asset('assets/libs/datatables/buttons.print.min.js') !!}"></script>
 <script src="{!! asset('assets/libs/datatables/buttons.colVis.js') !!}"></script>

 <!-- Responsive examples -->
 <script src="{!! asset('assets/libs/datatables/dataTables.responsive.min.js') !!}"></script>
 <script src="{!! asset('assets/libs/datatables/responsive.bootstrap4.min.js') !!}"></script>

 <!-- Datatables init -->
 <script src="{!! asset('assets/js/pages/datatables.init.js') !!}"></script>

 <!-- App js -->
 <script src="{!! asset('assets/js/app.min.js') !!}"></script>

@endsection