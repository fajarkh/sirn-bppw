<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wasdal extends Model
{
    use HasFactory;
    protected $appends = ['total_rt', 'jumlah_angsuran'];

    protected $fillable = [
        'penghuni_id',
        'hdno',
        'thn_bangunan',
        'kontruksi',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'no_sk',
        'tgl_sk',
        'no_sip',
        'tgl_sip',
        'no_sk_penjualan',
        'tgl_sk_penjualan',
        'no_psb',
        'tgl_psb',
        'status_penghuni',
        'ket_status',
        'mulai',
        'jatuh_tempo',
        'tipe_rumah',
        'fungsi_rumah',
        'bentuk_rumah',
        'luas_rumah1',
        'luas_rumah2',
        'luas_tanah1',
        'luas_tanah2',
        'latitude',
        'longtitude',
        'harga_rumah',
        'harga_tanah',
        'uang_muka',
        'angsuran_bulanan',
        'angsuran_terakhir',
        'utara',
        'selatan',
        'timur',
        'barat',
        'catatan',
        'situasi',
        'siteplan',
        'foto_lingkungan1',
        'foto_lingkungan2',
        'foto_rumah1',
        'foto_rumah2',
        'foto_rumah3',
        'foto_rumah4',
        'foto_5',
        'foto_pembayaran_akhir',
        'sktl_sewa',
        'tgl_sktl_sewa',
        'sktl_sb',
        'tgl_sktl_sb',
        'phm',
        'tgl_phm',
        'sisa_angsuran',
        'angsuran_terbayar'
    ];

    public function penghuni()
    {
        return $this->belongsTo(penghuni::class, 'penghuni_id');
    }

    public function berkas()
    {
        return $this->belongsTo(berkas::class, 'wasdal_id');
    }

    public function getTotalRtAttribute()
    {
        return $this->harga_rumah + $this->harga_tanah;
    }

    public function getJumlahAngsuranAttribute()
    {
        return $this->harga_rumah + $this->harga_tanah - $this->uang_muka;
    }
}
