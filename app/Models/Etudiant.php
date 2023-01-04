<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Etudiant extends Model
{
    use HasFactory;

    protected $table = 'etudiants';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'prenom', 'ville', 'niveau', 'statut', 'telephone', 'photo', 'contact_parent', 'nom_parent', 'ville_provenance', 'formation_scolaire', 'niveau_etude', 'sexe', 'age', 'description', 'formation_professionnelle', 'formation_id', 'classe_id'];

    public function classe()
    {
        return $this->belongsTo('App\Models\Klasse', 'classe_id');
    }
    public function formation()
    {
        return $this->belongsTo('App\Models\Formation', 'formation_id');
    }
    public function getPhotoAttribute($value) {
        return $value ? url(Storage::url($value)) : $value;
    }
}
