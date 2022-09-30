<?php

namespace App\Models;

use App\Models\courrier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class contact extends Model
{
    use HasFactory;

    public function courrier()
    {
        return $this->belongsTo(courrier::class);
    }
}
