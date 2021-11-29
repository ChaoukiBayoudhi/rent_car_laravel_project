<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
//protected $table='client_tab'
//protected $primaryKey='code'//par defaut c'est"id
public $timestamps=false;//si on ne veut pas créer les deux colonnes created_at et update_at

}
