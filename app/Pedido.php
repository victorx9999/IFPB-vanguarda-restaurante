<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'mesa',
        'status',
        'valor',
        'pago'
    ];
    
    public function itens()
    {
        return $this->belongsToMany(Itens::class);
    }
    
}
