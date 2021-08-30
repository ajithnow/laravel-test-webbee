<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use App\Models\Workshop;

class Event extends Model
{
    /**
     * Get the workshops for the event.
     */
    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }
}
