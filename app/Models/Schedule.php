<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function pengguna()
    {
        //User.php - fk user_id, refer to id (Model,FK,PK)
        return $this->belongsTo('App\Models\User','user_id', 'id');
    }
}
