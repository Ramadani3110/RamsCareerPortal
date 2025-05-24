<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    protected $guarded = ["id"];

    protected $table = "applications";

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the job that the application is for.
     */
    public function job()
    {
        return $this->belongsTo(JobPosts::class, 'job_id','id');
    }
}
