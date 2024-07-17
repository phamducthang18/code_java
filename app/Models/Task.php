<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','due_date','status','project_id'];

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function comments(){
        return $this->hasMany(TaskComment::class);
    }

    public function attachments(){
        return $this->hasMany(Attachment::class);
    }
}
