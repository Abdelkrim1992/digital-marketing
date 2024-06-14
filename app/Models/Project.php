<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'client_name',
        'project_icon',
        'project_description',
        'short_description',
        'due_date',
        'budget',
        'status_id',
    ];

    public function status()
    {
        return $this->belongsTo(ProjectStatus::class);
    }
}
