<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = ['title','read_status','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    
}
