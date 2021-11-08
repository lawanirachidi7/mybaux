
@section('styles')
<link href="{!! asset('assets/libs/summernote/summernote-bs4.css') !!}" rel="stylesheet" type="text/css" />
@endsection

{{-- !-- Delete Warning Modal -->  --}}

<form class="form-horizontal" action="{{ route('articles.store') }}" method="POST">
    @csrf
    <div class="modal-body">
        @csrf
        <input id="name" hidden disabled  type="number" class="form-control" name="baux_id" value="{{ $baux->id }}" required autocomplete="name" autofocus >                       

        <div class="form-group row">
            <div class="form-group col-md-4">
                <label for="article" >Numéro de l'acticle</label>
                <input required id="article" type="number" class="form-control" name="article" value="{{ old('titre_contract') }}" required autocomplete="name" autofocus >                       
            </div>
            <div class="form-group col-md-8">
                <label for="title" >Intitulé de l'article</label>
                <input required id="title" type="text" class="form-control" name="title" value="{{ old('numero_contract') }}" required autocomplete="name" autofocus >                       
            </div>
        </div>
        <div class="form-group row">
           
            <div class="form-group col-md-12">
                <label for="name" >Contenu</label>
                <div class="row">
                    <textarea  required class="" id="content" name="content" rows="18"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-danger">Comfirmer</button>
    </div>

</form>
 @section('scripts')      
   <!-- Summernote js -->
   <script src="{!! asset('assets/libs/summernote/summernote-bs4.min.js') !!}"></script>


   <!-- Init js -->
   <script src="{!! asset('assets/js/pages/form-summernote.init.js') !!}"></script>

@endsection