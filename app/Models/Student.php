<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'date_of_birth'
    ];

    protected $cast = [
        'date_of_birth' => 'date'
    ];

    protected $appends = [
        'full_name'
    ];

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class)->withPivot('score');
    }

    public function getFullNameAttribute()
    {
        return $this->name . ' ' . $this->last_name;
    }
}
