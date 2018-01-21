<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $fillable = ['civilite','prenom', 'nom','fonction','service', 'telephone_mobile', 'email', 'date_naissance', 'societe', 'adresse', 'code_postal', 'ville','telephone', 'site_web'];
}
