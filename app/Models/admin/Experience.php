<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'poste',
        'entreprise',
        'description',
        'statut',
        'date_debut',
        'date_fin',
    ];
}
