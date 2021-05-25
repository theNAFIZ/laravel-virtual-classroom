<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method teacher()
 */
class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function instructor()
    {
        return $this->belongsTo(User::class, 'teacher', 'id');
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}
