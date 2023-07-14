<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Task extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function booted()
    {
        static::creating(function ($task) {
            $task->id = Uuid::uuid7();
        });
    }
}
