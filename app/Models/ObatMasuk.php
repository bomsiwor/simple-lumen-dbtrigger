<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObatMasuk extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'obat_masuk';

    public $timestamps = false;

    protected $fillable = [
        'obat_id',
        'tanggal_masuk',
        'jumlah'
    ];
}
