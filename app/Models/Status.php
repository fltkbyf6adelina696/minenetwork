<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table ='statuses';
    protected $fillable = ['body'];

    # получить пользователя по записи на стене (обратное отношение)
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

   

}