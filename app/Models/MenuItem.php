<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{


    public function mainMenu()
    {
        //self reffering
        return $this->hasOne($this, 'id', 'parent_id');
    }

    public function subMenu()
    {
        //self reffering
        return $this->hasMany($this, 'parent_id', 'id')->with('subMenu');
    }
}
