<!-- Modal -->
<form method="POST" action="{{route('deleteDataNik', $row->id)}}">
    @csrf
    @method('delete')
    <div class="modal fade" id="del{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-light">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    NIK <span style="color: red;"><strong>{{$row->nik}}</strong></span> atas nama <span style="color: red;"><strong>{{$row->nama}}</strong></span> akan dihapus ?
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>