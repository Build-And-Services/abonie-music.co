<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkPresave extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }

    public function presave()
    {
        return $this->belongsTo(Presave::class);
    }
}
