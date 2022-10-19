<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $fillable = [
            'nom_entreprise',
            'email_entreprise',
            'adresse',
            'telephone',
            'numero_ifu',
            'rccm',
            'user_id'
    ];
}
