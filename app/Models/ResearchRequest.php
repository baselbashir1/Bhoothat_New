<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchRequest extends Model
{
    use HasFactory;
    public $table = "research_requests";
    public $fillable = ['phone', 'education_level', 'research_topic', 'teacher_name', 'notes'];
}
