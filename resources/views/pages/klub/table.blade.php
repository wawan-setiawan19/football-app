<table class="table" id="myTable">
    <thead class="dark-color-special">
        <tr>
            <th> No. </th>
            <th> Nama Klub </th>
            <th> Aksi </th>
        </tr>
    </thead>
    <tbody class="secondary-color">
        <?php $no = 1;?>
        @foreach ($teams as $team)
        <tr>
            <td>{{ $no++}}</td>
            <td>{{ $team->nama_tim }}</td>
            <td>
                <button type="button" class="btn btn-primary p-2" data-bs-toggle="modal" data-bs-target="#editModal{{$team->id}}">Edit</button>
                <button type="button" class="btn btn-danger p-2" data-bs-toggle="modal" data-bs-target="#deleteModal{{$team->id}}">Hapus</button>
            </td>
        </tr>
        @include('pages.klub.delete')
        @include('pages.klub.edit')
        @endforeach
    </tbody>
</table>

<script>
    $(document).ready( function () {
        $('#myTable').DataTable({});
    } );
</script>