<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">Kabupaten :</label>
            <b>{{$wasdal->kabupaten}}</b>
        </div>
        <div class="col-md-6">
            <label for="" class="label">Kecamatan :</label>
            <b>{{$wasdal->kecamatan}}</b>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">Tahun Bangunan :</label>
            <b>{{$wasdal->thn_bangunan}}</b>
        </div>
        <div class="col-md-6">
            <label for="" class="label">Kontruksi :</label>
            <b>{{$wasdal->kontruksi}}</b>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">NO SK RNG III :</label>
            <b>{{$wasdal->no_sk}}</b>
        </div>
        <div class="col-md-6">
            <label for="" class="label">Tanggal SK RNG III :</label>
            <b>@if(!empty($wasdal->tgl_sk)){{date('d-m-Y', strtotime($wasdal->tgl_sk))}} @endif</b>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">NO SIP :</label>
            <b>{{$wasdal->no_sip}}</b>
        </div>
        <div class="col-md-6">
            <label for="" class="label">Tanggal SIP :</label>
            <b>@if(!empty($wasdal->tgl_sip)){{date('d-m-Y', strtotime($wasdal->tgl_sip))}} @endif</b>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">NO SK Penjualan :</label>
            <b>{{$wasdal->no_sk_penjualan}}</b>
        </div>
        <div class="col-md-6">
            <label for="" class="label">Tanggal SIP :</label>
            <b>@if(!empty($wasdal->tgl_sk_penjualan)){{date('d-m-Y', strtotime($wasdal->tgl_sk_penjualan))}} @endif</b>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">NO PSB :</label>
            <b>{{$wasdal->no_psb}}</b>
        </div>
        <div class="col-md-6">
            <label for="" class="label">Tanggal PSB :</label>
            <b>@if(!empty($wasdal->tgl_psb)){{date('d-m-Y', strtotime($wasdal->tgl_psb))}} @endif</b>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">Status Penghuni :</label>
            <b>{{$wasdal->status_penghuni}}</b>
        </div>
        <div class="col-md-6">
            <label for="" class="label">Keterangan :</label>
            <b>{{$wasdal->ket_status}}</b>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">SKTL Sewa :</label>
            <b>{{$wasdal->sktl_sewa}}</b>
        </div>
        <div class="col-md-6">
            <label for="" class="label">Tanggal SKTL Sewa :</label>
            <b>@if(!empty($wasdal->tgl_sktl_sewa)){{date('d-m-Y', strtotime($wasdal->tgl_sktl_sewa))}} @endif</b>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">Mulai Sewa Beli :</label>
            <b>@if(!empty($wasdal->mulai)) {{date('d-m-Y', strtotime($wasdal->mulai))}} @endif</b>
        </div>
        <div class="col-md-6">
            <label for="" class="label">Jatuh Tempo Sewa Beli :</label>
            <b>@if(!empty($wasdal->jatuh_tempo)) {{date('d-m-Y', strtotime($wasdal->jatuh_tempo))}} @endif</b>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">SKTL Sewa Beli :</label>
            <b>{{$wasdal->sktl_sb}}</b>
        </div>
        <div class="col-md-6">
            <label for="" class="label">Tanggal SKTL Sewa Beli :</label>
            <b>@if(!empty($wasdal->tgl_sktl_sb)){{date('d-m-Y', strtotime($wasdal->tgl_sktl_sb))}} @endif</b>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="row">
        <div class="col-md-6">
            <label for="" class="label">Pelepasan Hak Milik :</label>
            <b>{{$wasdal->phm}}</b>
        </div>
        <div class="col-md-6">
            <label for="" class="label">Tanggal Pelepasan Hakmil :</label>
            <b>@if(!empty($wasdal->tgl_phm)){{date('d-m-Y', strtotime($wasdal->tgl_phm))}} @endif</b>
        </div>
    </div>
</div>

@if (Auth::check() && Auth::user()->role  == "superadmin")
<div class="text-center">
    <a href="{{ route('wasdal.penghuni', ['wasdal_id'=>$wasdal->id]) }}" class="btn btn-warning">
        Edit Data Penghuni
    </a>
</div>
@endif