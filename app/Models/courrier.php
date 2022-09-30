<?php

namespace App\Models;

use App\Models\contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class courrier extends Model
{
    use HasFactory;

    public function contact()
    {
        return $this->hasOne(contact::class);
    }
}
