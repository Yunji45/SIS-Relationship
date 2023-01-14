<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perdagangan1 extends Model
{
    use HasFactory;

    protected $table= "perdagangan1s";
    protected $fillable= [
        'user_id',
        'jam',
        'ket',
        'jml_Rp',
    ];

    protected $primaryKey = "id";
    
    public function user(){
        return $this->belongsTo(User::class);
    }

}
