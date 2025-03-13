<?php
namespace App\Models; // Since your model is inside the 'Models' folder

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'description', 'status'];
}
