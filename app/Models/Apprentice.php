<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class Apprentice extends Model
{
    use HasFactory;
    use HasApiTokens;

    protected $fillable =[
        'name',
        'document_number',
        'email',
        'telephone',
        'course_id'
    ];

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
