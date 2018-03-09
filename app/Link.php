<?php

namespace budprirodi;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $table = 'links';
    protected $fillable = ['text', 'href', 'order'];

/*    public function setOrder($value){
    	$this->order = $value;
    	$this->save();
    }*/
}
