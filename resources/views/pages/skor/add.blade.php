<form action="{{route('add_skor')}}" method="post">
    <div id="matchWrapper">
    </div>
    <div class="row mt-2" id="saveBtn">
        <button class="col-4 offset-4 btn btn-primary">Simpan Data Pertandingan</button>
    </div>
</form>

<script>
    const matchWrapper = document.querySelector('#matchWrapper');
    const saveBtn = document.querySelector('#saveBtn');
    let countMatch = 0;
    if( countMatch === 0 ){
        saveBtn.classList.add('d-none');
    }
    
    const addMatch = () =>{
        countMatch += 1
        if(countMatch > 0){
            saveBtn.classList.remove('d-none');
        }
        const html = `
        <div class="row mt-3 border border-dark border-2 p-2 rounded-3">
            <div class="col-4">
                <div class="form-group">
                    <label for="">Tim Home</label>
                    <select name="id_home[]" class="form-control">
                        <option value="">-- Pilihan Tim --</option>
                    @foreach ($teams as $item)
                        <option value="{{$item->id}}">{{$item->nama_tim}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="col-1">
                <div class="form-group">
                <label for=""></label>    
                <input class="form-control" type="text" name="skor_home[]" id="" value=0>
                </div>
            </div>
            <div class="col-2 text-center">
                <div class="form-group">
                    <!-- <label for=""></label> -->
                    <div class="fs-1">-</div>
                </div>
            </div>
            <div class="col-1">
                <div class="form-group">
                <label for=""></label>    
                <input class="form-control" type="text" name="skor_away[]" id="" value=0>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Tim Away</label>
                    <select name="id_away[]" class="form-control">
                        <option value="">-- Pilihan Tim --</option>
                    @foreach ($teams as $item)
                        <option value="{{$item->id}}">{{$item->nama_tim}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
        </div>
        `
        matchWrapper.innerHTML += html
    }
</script>