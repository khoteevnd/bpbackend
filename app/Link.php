<?php

namespace budprirodi;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $table = 'link';
    protected $fillable = ['text', 'href', 'order'];
}
