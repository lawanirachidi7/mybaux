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
                        <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('parties.index')}}">Parties</a></li>
                        <li class="breadcrumb-item active">Liste</li>
                    </ol>
                </div>
                <h4 class="page-title">Liste des parties</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">
                <div class="row">
                    <div class="col-6">
                        <h4 class="header-title">Tableau des parties</h4>
                        <p class="sub-header">
                            Liste complète des partie</code>.
                        </p>
                    </div>
                    <div class="col-6 d-flex justify-content-end ">
                       <a href="{{ route ('parties.create')}}" class="btn btn-success mb-4" > Ajouter une partie</a>
                    </div>
                </div>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 375.4px;" aria-label="Position: activate to sort column ascending">Raison_social</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 189.4px;" aria-label="Office: activate to sort column ascending">Rccm</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 97.4px;" aria-label="Age: activate to sort column ascending">Ifu</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 176.4px;" aria-label="Start date: activate to sort column ascending">capital</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 176.4px;" aria-label="Start date: activate to sort column ascending">siège</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 176.4px;" aria-label="Start date: activate to sort column ascending">contact</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 176.4px;" aria-label="Start date: activate to sort column ascending">domaine d'activité</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 176.4px;" aria-label="Start date: activate to sort column ascending">email</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 176.4px;" aria-label="Start date: activate to sort column ascending">Responsable</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 176.4px;" aria-label="Start date: activate to sort column ascending">Contact responsable</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 176.4px;" aria-label="Start date: activate to sort column ascending">options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($parties as $partie)
                            <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1">{{$partie->raison_social}}</td>
                                <td>{{$partie->rccm}}</td>
                                <td>{{$partie->ifu}}</td>
                                <td>{{$partie->capital}}</td>
                                <td>{{$partie->siege}}</td>
                                <td>{{$partie->contact}}</td>
                                <td>{{$partie->domaine_activite}}</td>
                                <td>{{$partie->email}}</td>
                                <td>{{$partie->Responsable}}</td>
                                <td>{{$partie->contact_responsable}}</td>
                                <td>
                                    <a class="btn btn-primary my-2" href="{{ route("parties.show",$partie->id)}}" title="Afficher"><i class="fas fa-pencil-alt mr-1" ></i>Voir</a>
                                    <a class="btn btn-warning my-2" href="{{ route("parties.edit",$partie->id) }}"   title="Modifier"><i class="fas fa-pencil-alt mr-1" ></i>Modifier</a>
                                   
                                    

                                    <a data-toggle="modal" id="smallButton" data-target="#smallModal" data-attr="{{ route('parties.delete', $partie->id) }}" title="Delete" class="btn btn-danger my-1"><i class="fa fa-trash-alt mr-1" ></i>Supprimer
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
