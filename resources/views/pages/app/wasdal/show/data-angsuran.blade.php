<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">Harga Rumah :</label>
            <b>Rp. {{number_format($wasdal->harga_rumah,0,',','.')}}</b>
        </div>
        <div class="col-md-6">
            <label for="" class="label">Harga Tanah :</label>
            <b>Rp. {{number_format($wasdal->harga_tanah,0,',','.')}}</b>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="row">
        <div class="col-md-12">
            <label for="" class="label">Harga Rumah & Tanah:</label>
            <b>Rp. {{number_format($wasdal->total_rt,0,',','.')}}</b>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">Uang Muka ..% :</label>
            <b>Rp. {{number_format($wasdal->uang_muka,0,',','.')}}</b>
        </div>
        <div class="col-md-6">
            <label for="" class="label">Jumlah Angsuran:</label>
            <b>Rp. {{number_format($wasdal->total_rt,0,',','.')}}</b>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">Angsuran Perbulan :</label>
            <b>Rp. {{number_format($wasdal->angsuran_bulanan,0,',','.')}}</b>
        </div>
        <div class="col-md-6">
            <label for="" class="label">Angsuran Terakhir :</label>
            <b>Rp. {{number_format($wasdal->angsuran_terakhir,0,',','.')}}</b>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">Angsuran Terbayar :</label>
            <b>Rp. {{number_format($wasdal->angsuran_terbayar,0,',','.')}}</b>
        </div>
        <div class="col-md-6">
            <label for="" class="label">Sisa Angsuran :</label>
            <b>Rp. {{number_format($wasdal->sisa_angsuran,0,',','.')}}</b>
        </div>
    </div>
</div>

@if (Auth::check() && Auth::user()->role  == "superadmin")
<div class="text-center">
    <a href="{{ route('wasdal.angsuran', ['wasdal_id'=>$wasdal->id]) }}" class="btn btn-warning">
        Edit Data Angsuran
    </a>
</div>
@endif