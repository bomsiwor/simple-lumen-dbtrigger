<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Obat extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'obat';

    public $timestamps = false;

    protected $fillable = [
        'seri',
        'nama_obat',
        'stok'
    ];
}
