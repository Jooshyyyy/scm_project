<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Purchase extends Model
{
    use HasFactory;
    protected $fillable = [
        'provider_id',
        'purchase_date',
        'total',
        'status'
    ];
    public function provider(){
        return $this->belongsTo(Provider::class);
    }
}
