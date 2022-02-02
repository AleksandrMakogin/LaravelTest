<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainTabel extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'gener_id'
    ];
    public  function book(){
        return $this->belongsTo(Books::class, 'book_id','id');
    }
    public function gener(){
        return $this->belongsTo(Gener::class, 'gener_id', 'id');
    }
}
