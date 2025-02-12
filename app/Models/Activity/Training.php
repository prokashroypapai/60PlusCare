<?php

namespace App\Models\Activity;

use App\Models\Picture;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    //status
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    //is_expired
    const EXPIRED_YES = true;
    const EXPIRED_NO = false;

    protected $fillable = [
        'user_id',
        'picture_id',
        'training_title',
        'training_slug',
        'training_details',
        'training_rules',
        'training_location',
        'training_date',
        'date_expiry',
        'is_expired',
        'status'
    ];

    protected $casts = [
        'training_date' => 'date',
        'date_expiry' => 'date',
        'is_expired' => 'boolean',
        'status' => 'boolean'
    ];

    //active training
    public function scopeActive(){
        return $this->where('status', self::STATUS_ACTIVE);
    }

    //training has Picture
    public function trainingPicture(){
        return $this->hasOne(Picture::class, 'id', 'picture_id');
    }

    //training has many participants
    public function trainingParticipants(){
        return $this->hasMany(Participant::class);
    }
}
