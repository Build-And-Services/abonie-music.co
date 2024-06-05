<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortLink extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function statuses()
    {
        return $this->morphOne(Status::class, 'statusable');
    }

    public function viewable()
    {
        return $this->morphOne(View::class, 'viewable');
    }
}
