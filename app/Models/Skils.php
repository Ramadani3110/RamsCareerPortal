<?php

namespace App\Models;

use App\Livewire\Admin\JobPost;
use Illuminate\Database\Eloquent\Model;

class Skils extends Model
{
    protected $guarded = ["id"];

    protected $table = "skils";

    public function jobPosts()
    {
        return $this->belongsToMany(JobPost::class);
    }
}
