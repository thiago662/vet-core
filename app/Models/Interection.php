<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Interection extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'type',
        'user_id',
        'owner_id',
        'animal_id',
        'created_by',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function message()
    {
        return $this->hasOne(Message::class);
    }

    public function schedule()
    {
        return $this->hasOne(Schedule::class);
    }
}
