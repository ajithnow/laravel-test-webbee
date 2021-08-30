<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public function parent()
    {
        //self reffering
        return $this->hasOne($this, 'id', 'parent_id');
    }


    public function children()
    {
        //self reffering
        return $this->hasMany($this, 'parent_id', 'id')->with('children');
    }
}
