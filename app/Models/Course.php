<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Course extends Model
{
    use HasFactory;
    use HasApiTokens;

    protected $fillable =[
        'name',
        'code'
    ];
//relacion para decir que curso tiene muchos aprendices
    public function apprentices(){
        return $this->hasMany(Apprentice::class);
    }
}
