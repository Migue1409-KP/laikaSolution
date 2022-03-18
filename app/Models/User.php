<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name', 'lastname', 'gender', 'age'
    ];
    protected $primaryKey = 'idtbl_user';
    protected $table = 'tbl_user';

    public function subjectUser()
    {
        return $this->hasMany('App\Models\Subject', 'tbl_user_idtbl_user', 'local_key');
    }
}
