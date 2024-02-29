<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    /**
     * Get the students that owns the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    /**
     * Get all of the book_issues for the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function book_issues()
    {
        return $this->hasMany(BookIssue::class);
    }
}
