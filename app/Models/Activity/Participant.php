<?php

namespace App\Models\Activity;

use App\Models\Picture;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    //status
    const STATUS_ACTIVE = true;
    const STATUS_INACTIVE = false;

    //is_eligible
    const ELIGIBLE_YES = true;
    const ELIGIBLE_NO = false;

    protected $fillable = [
        'training_id',
        'picture_id',
        'certificate_no',
        'name',
        'mobile',
        'email',
        'address',
        'city',
        'dob',
        'age',
        'is_eligible',
        'status'
    ];

    protected $hidden = [
        'mobile',
        'email'
    ];

    protected $casts = [
        'is_eligible' => 'boolean',
        'status' => 'boolean'
    ];

    //active Participants
    public function scopeActive(){
        return $this->where('status', self::STATUS_ACTIVE);
    }

    //Participant has picture
    public function participantPicture(){
        return $this->hasOne(Picture::class, 'id', 'picture_id');
    }

    //Participant has Training
    public function participantTraining(){
        return $this->hasOne(Training::class, 'id', 'training_id');
    }
}
