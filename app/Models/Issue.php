<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    public function stories() {
        return $this->hasMany(Story::class)->orderBy('order');
    }

    public function title() {
        return $this->belongsTo(Title::class);
    }
}
