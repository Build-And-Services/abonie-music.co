<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biolink extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function statuses()
    {
        return $this->morphOne(Status::class, 'statusable');
    }

    public function viewable()
    {
        return $this->morphOne(View::class, 'viewable');
    }

    public function linkable()
    {
        return $this->morphMany(Link::class, 'linkable');
    }
}
