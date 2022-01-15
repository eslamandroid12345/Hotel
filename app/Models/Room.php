<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['client_id','city_from','city_to','trip_time','children','date_arrive','date_leave'];
    protected $dates = ['deleted_at'];


    public function user(){

        return $this->belongsTo(User::class,'client_id');
    }
}
