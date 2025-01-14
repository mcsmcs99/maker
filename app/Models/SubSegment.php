<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSegment extends Model
{
    use HasFactory;

    protected $fillable = ['segment_id', 'label'];

    // Relacionamento com Segment
    public function segment()
    {
        return $this->belongsTo(Segment::class);
    }
}
