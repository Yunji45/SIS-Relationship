<?php

/*
 * This file is part of the IndoRegion package.
 *
 * (c) Azis Hapidin <azishapidin.com | azishapidin@gmail.com>
 *
 */

namespace App\Models;

use AzisHapidin\IndoRegion\Traits\ProvinceTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Province Model.
 */
class Province extends Model
{
    use ProvinceTrait;
    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'provinces';
    protected $fillable = [
        'user_id',
        'kode',
        'name',
        'ibukota'
    ];

    protected $hidden = [
        'user_id'
    ];


    // protected $primaryKey = 'No';

    /**
     * Province has many regencies.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function regencies()
    {
        return $this->hasMany(Regency::class);
    }

    public function pedagang(){
        return $this->belongsTo(Perdagangan1::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
