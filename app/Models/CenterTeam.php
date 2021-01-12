<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CenterTeam extends Model
{
    use HasFactory;
    public function center(){
        return $this->belongsTo('App\Models\Team', 'center_id');
    }
}
