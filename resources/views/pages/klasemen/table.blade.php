<table class="table klasemen" id="myTable">
    <thead class="dark-color-special">
        <tr>
            <th> # </th>
            <th> Nama Klub </th>
            <th> MP </th>
            <th> W </th>
            <th> D </th>
            <th> L </th>
            <th> GF </th>
            <th> GA </th>
            <th> DG </th>
            <th> PT </th>
            <th> Last 5 </th>
        </tr>
    </thead>
    <tbody class="secondary-color">
        <?php $no = 1;?>
        @foreach ($klasemen as $team)
        <tr>
            <td>{{ $no++}}</td>
            <td>{{ $team->nama_tim }}</td>
            <td>{{ $team->match_play }}</td>
            <td>{{ $team->win }}</td>
            <td>{{ $team->draw }}</td>
            <td>{{ $team->lose }}</td>
            <td>{{ $team->goal_for }}</td>
            <td>{{ $team->goal_against }}</td>
            <td>{{ $team->goal_difference }}</td>
            <td>{{ $team->point }}</td>
            <td>
                <div class="d-flex">
                    <i class="bi bi-check-circle-fill text-success mx-1"></i>
                    <i class="bi bi-x-circle-fill text-danger mx-1"></i>
                    <i class="bi bi-dash-circle-fill text-secondary mx-1"></i>
                    <i class="bi bi-check-circle-fill text-success mx-1"></i>
                    <i class="bi bi-x-circle-fill text-danger mx-1"></i>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script>
    $(document).ready( function () {
        $('#myTable').DataTable({
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            ordering: false,
            searching: false,
            autoWidth: false,
            fixedColumns:   {
                left: 1,
                right: 1
            }
        });
    } );
</script>