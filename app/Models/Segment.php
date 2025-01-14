<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    use HasFactory;

    protected $fillable = ['label'];

    // Relacionamento com SubSegment
    public function subSegments()
    {
        return $this->hasMany(SubSegment::class);
    }
}