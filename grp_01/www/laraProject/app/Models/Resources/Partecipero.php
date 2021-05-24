<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;
/**
 * Description of Partecipero
 *
 * @author chiar
 */
class Partecipero extends Model{
    
    protected $table = 'partecipero';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['codice_utente','codice_evento'];
}
