<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    protected $fillable = [
        'sewa_id', 'kendaraan_id', 'nama_penyewa', 
    'tangga_mulai', 'lama_sewa', 'total_biaya', 'status',
    ];

      protected function casts(): array 
      {
        return [
            'tanggal_mulia' =>'date',
            'status'        =>'enum',
        ];
      }
}
