<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
    protected $table = 'leveranciers_info';
    protected $primaryKey = 'leveranciersnummer';
    const CREATED_AT = 'aangemaakt_op';
    const UPDATED_AT = 'bijgewerkt_op';
    protected $fillable = [
        'bedrijfsnaam',
        'contactpersoon',
        'email',
        'telefoonnummer',
        'adres',
        'postcode',
        'plaats',
        'land',
        'kvk_nummer',
        'btw_nummer',
        'bankrekening',
    ];
}
