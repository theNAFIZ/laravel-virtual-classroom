<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $guarded = [];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function isTeacher()
    {
        return $this->user_type == "Teacher" ? 1 : 0;
    }


    public function isStudent()
    {
        return $this->user_type == "Student" ? 1 : 0;
    }


    public function isAdmin()
    {
        return $this->user_type == "Admin" ? 1 : 0;
    }


    public function courses()
    {
        if ($this->isStudent())
            return $this->belongsTo(Batch::class)->courses;
        elseif ($this->isTeacher())
            return $users = DB::table('courses')
                ->where('teacher', $this)
                ->get();
        else
            return Course::all();
    }
}
