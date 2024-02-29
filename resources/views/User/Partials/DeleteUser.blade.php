<!-- Outer Modal -->
<div class="modal fade" id="deleteModal{{ $data['id'] }}" tabindex="-1" aria-labelledby="outerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="outerModalLabel">Hapus Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('deleteUser')}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <div class="mb-3 row">
                        <label for="idStockIn" class="col col-form-label text-center">Apakah anda yakin akan menghapus data user dengan id {{ $data['id'] }} ?</label>
                        <input type="hidden" class="form-control" id="id" name="id" value="{{$data['id']}}" required>
                    </div>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        </div>
    </div>
</div>