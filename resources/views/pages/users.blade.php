@extends('layouts.default_table')
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
                <h4 class="header-title">Tableau des utlisateurs</h4>
                <p class="sub-header">
                    Liste complète des utilisateurs</code>.
                </p>

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
                    <tr role="row" class="odd">
                        <td tabindex="0" class="sorting_1">Airi Satou</td>
                        <td>Accountant</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                    </tr>
                    </tbody>
        
                </table>
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
