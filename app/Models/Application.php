<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //
    protected $fillable = ['job_offer_id', 'first_name', 'last_name', 'email', 'cv_path'];

    public function jobOffer()
    {
        return $this->belongsTo(JobOffer::class);
    }

}
