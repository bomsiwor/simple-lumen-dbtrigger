<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObatKeluar extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'obat_keluar';

    public $timestamps = false;

    protected $fillable = [
        'obat_id',
        'tanggal_keluar',
        'jumlah'
    ];
}
