@extends('layouts.default')
@section('styles')
    <link href="{!! asset('assets/libs/datatables/dataTables.bootstrap4.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/libs/datatables/buttons.bootstrap4.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/libs/datatables/responsive.bootstrap4.css') !!}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Utilisateurs</a></li>
                        <li class="breadcrumb-item active">Liste</li>
                    </ol>
                </div>
                <h4 class="page-title">Liste des utilisateurs</h4>
            </div>
        </div>
    </div>     

    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">
                <div class="row">
                    <div class="col-6">
                        <h4 class="header-title">Tableau des utlisateurs</h4>
                        <p class="sub-header">
                            Liste complète des utilisateurs</code>.
                        </p>
                    </div>
                    <div class="col-6 d-flex justify-content-end ">
                       <a href="{{ route ('user.create') }}" class="btn btn-success mb-4" > Ajouter un utilisateur</a>
                    </div>
                </div>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 375.4px;" aria-label="Position: activate to sort column ascending">Nom et prénom</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 189.4px;" aria-label="Office: activate to sort column ascending">Email</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 97.4px;" aria-label="Age: activate to sort column ascending">Privilèges</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 176.4px;" aria-label="Start date: activate to sort column ascending">Statut</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 176.4px;" aria-label="Start date: activate to sort column ascending">options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr role="row" class="odd">
                                <td tabindex="0" class="sorting_1"> {{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @if ($user->privilege==1)
                                    Administrateur
                                    @elseif($user->privilege==2)
                                    Utilisateur
                                    @elseif($user->privilege==3)
                                    Invité
                                    @endif
                                </td>
                                <td>
                                    @if ($user->statut==1)
                                        <span class="badge badge-success">Activé</span>                                                                   
                                    @else
                                        <span class="badge badge-danger">Désativé</span>                                                                   
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-info mr-1 my-1" title="Modifier" href="{{ route('user.show',$user->id) }}"><i class="fas  fas fa-user  mr-1" ></i>Afficher</a>
                                    <a class="btn btn-primary mr-1 my-1" title="Modifier" href="{{ route('user.edit',$user->id) }}"><i class="fas fa-pencil-alt mr-1" ></i>Modifier</a>
                                    @if ($user->statut==1)
                                        <form action="{{ url('user_desactive',$user->id) }}" method="POST">
                                            @csrf                    
                                            @method('PUT')
                                            <input type="text" hidden name="statut" value="0" class="form-control" placeholder="Name">
                                            <button type="submit" class="btn btn-warning my-1"><i class="fas fa-user-times mr-1 " ></i>Désactiver</button>
                                        </form> 
                                    @else
                                        <form action="{{  url('user_active',$user->id) }}" method="POST">
                                            @csrf                    
                                            @method('PUT')
                                            <button type="submit" class="btn btn-success  my-1"><i class="fa fa-user-check mr-1" ></i>Activer</button>
                                        </form>
                                    @endif
                                    {{-- <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                                        @csrf                    
                                        @method('DELETE')         
                                        <button type="submit" class="btn btn-danger my-1"><i class="fa fa-trash-alt mr-1" ></i>Supprimer</button>
                    
                                    </form> --}}
                                    <a data-toggle="modal" id="smallButton" data-target="#smallModal" data-attr="{{ route('user.delete', $user->id) }}" title="supprimer" class="btn btn-danger my-1"><i class="fa fa-trash-alt mr-1" ></i>Supprimer
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