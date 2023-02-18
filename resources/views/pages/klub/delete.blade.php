<div class="modal fade" id="deleteModal{{$team->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hapus Klub</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('/input-klub/delete/'.$team->id.'')}}" method="POST">
            @method('DELETE')
            @csrf
            <div class="modal-body">
                    {!! csrf_field() !!}
                    <h2>Apakah anda yakin akan mengapus tim {{$team->nama_tim}}?</h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-danger">Konfirmasi Hapus</button>
            </div>
        </form>
        </div>
    </div>
</div>