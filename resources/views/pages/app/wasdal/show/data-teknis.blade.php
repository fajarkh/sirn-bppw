<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">Tipe Rumah :</label>
            <b>{{$wasdal->tipe_rumah}}</b>
        </div>
        <div class="col-md-6">
            <label for="" class="label">Fungsi Rumah :</label>
            <b>{{$wasdal->fungsi_rumah}}</b>
        </div>
    </div>
</div>

<div class="col-12">
    <label for="" class="label">Perubahan Bentuk Rumah :</label>
    <b>{{$wasdal->bentuk_rumah}}</b> <br> <br>
</div>

<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">Luas Rumah (PSB) :</label>
            <b>{{$wasdal->luas_rumah1}}</b>
        </div>
        <div class="col-md-6">
            <label for="" class="label">Pengukuran Lapangan :</label>
            <b>{{$wasdal->luas_rumah2}}</b>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">Luas Tanah (PSB) :</label>
            <b>{{$wasdal->luas_tanah1}}</b>
        </div>
        <div class="col-md-6">
            <label for="" class="label">Pengukuran Lapangan :</label>
            <b>{{$wasdal->luas_tanah2   }}</b>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">Latitude :</label>
            <b>{{$wasdal->latitude}}</b>
        </div>
        <div class="col-md-6">
            <label for="" class="label">Longtitude :</label>
            <b>{{$wasdal->longtitude}}</b>
        </div>
    </div>
</div>

@if (Auth::check() && Auth::user()->role  == "superadmin")
<div class="text-center">
    <a href="{{ route('wasdal.teknis', ['wasdal_id'=>$wasdal->id]) }}" class="btn btn-warning">
        Edit Data Teknis
    </a>
</div>
@endif