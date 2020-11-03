<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    use HasFactory;
    protected $fillable = [
        'state_id','confirmed_cases','active_cases','recovery'
    ];

    public function state()
    {

        return $this->belongsTo('App\Models\State');
    }

    /**
     * Get the parent of the activity feed record.
     */
    public function parentable()
    {
        return $this->morphTo();
    }
}
