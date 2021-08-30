<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Carbon;

class Workshop extends Model
{
    /**
     * Get the events that owns the workshops.
     */
    public function event()
    {
        return $this->belongTo(Event::class);
    }
}
