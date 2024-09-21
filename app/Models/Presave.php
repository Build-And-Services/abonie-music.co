<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Presave extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'link',
                'onUpdate' => true
            ]
        ];
    }

    public function links()
    {
        return $this->hasMany(LinkPresave::class);
    }

    public function statuses()
    {
        return $this->morphOne(Status::class, 'statusable');
    }

    public function viewable()
    {
        return $this->morphOne(View::class, 'viewable');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
