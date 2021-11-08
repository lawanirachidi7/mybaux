{{-- !-- Delete Warning Modal -->  --}}
<form action="{{ route('parties.destroy', $parties->id) }}" method="post">
    <div class="modal-body">
        @csrf
        @method('DELETE')
        <h5 class="text-center">Etes-vous sure de vouloir supprimer :  {{ $parties->raison_social }} ?</h5>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-danger">Comfirmer</button>
    </div>
</form>
