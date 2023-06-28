<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
    protected $fillable = ['bookid', 'authorid', 'title', 'ISBN', 'pub_year', 'avaiable'];
    use HasFactory;
}
