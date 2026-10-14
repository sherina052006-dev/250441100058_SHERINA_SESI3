<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $fillable =[
        'kendaraan_id', 'plat_nomor', 'merek', 'jenis',
'tarif_per_hari',
    ];

    Protected function casts(): array
    {
        return [
            'jenis'          =>'integer',
            'tarif_per_hari' =>'Unem',
        ];
    }


}
