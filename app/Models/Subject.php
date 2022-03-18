<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'nameSubject', 'tbl_user_idtbl_user'
    ];
    protected $primaryKey = 'idtbl_subject';
    protected $table = 'tbl_subjects';

    public function user()
    {
        return $this->hasOne('App\Models\User', 'tbl_user_idtbl_user', 'local_key');
    }
}
