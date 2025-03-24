<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedback'; // Optional if your table name is the same as the model name

    protected $fillable = ['image']; // Specifies which fields can be mass-assigned
}
