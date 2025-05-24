<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class JobPosts extends Model
{
    protected $guarded = ["id"];

    protected $table = 'job_posts';

    public function applications()
    {
        return $this->hasMany(Applications::class, 'job_id');
    }

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skils::class, 'job_post_skill', 'job_post_id', 'skils_id')
            ->withTimestamps();
    }

    public function getFormattedSalaryAttribute()
    {
        if (!$this->salary_min && !$this->salary_max) {
            return 'Negotiable';
        }

        if ($this->salary_min && !$this->salary_max) {
            return 'Rp ' . number_format($this->salary_min, 0, ',', '.') . ' juta';
        }

        if (!$this->salary_min && $this->salary_max) {
            return 'Up to Rp ' . number_format($this->salary_max, 0, ',', '.') . ' juta';
        }

        return 'Rp ' . number_format($this->salary_min, 0, ',', '.') . ' - ' .
            number_format($this->salary_max, 0, ',', '.') . ' juta';
    }
}
