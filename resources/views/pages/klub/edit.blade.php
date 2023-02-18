<div class="modal fade" id="editModal{{$team->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Klub</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{url('/input-klub/update/'.$team->id.'')}}" class="form">
                <div class="modal-body">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="">Nama Klub</label>
                        <input type="text" name="nama_tim" placeholder="Nama" class="form-control" value="{{$team->nama_tim}}">
                        <span class="text-danger">{{ $errors->first('name')}}</span>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary">Simpan Klub</button>
                </div>
            </form>
        </div>
    </div>
</div>
