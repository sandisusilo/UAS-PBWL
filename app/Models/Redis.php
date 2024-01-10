<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Redis extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'redis';
    protected $primaryKey = 'r_id';
    protected $fillable = [
        'id_p',
        'tgl_periksa',
        'keluhan',
        'tindakan',
        'diagnosa',
        'r_id_o',
    ];
    public function pasien(): HasOne
    {
        return $this->hasOne(Pasien::class, 'id', 'id_p');    
    }
    public function obat(): HasOne
    {
        return $this->hasOne(Obat::class,'o_id', 'r_id_o');    
    }
}
