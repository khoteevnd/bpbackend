<?php

namespace budprirodi;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
<<<<<<< HEAD
    protected $table = 'links';
    protected $fillable = ['text', 'href'];
=======
    protected $table = 'link';
    protected $fillable = ['text', 'href', 'order'];
>>>>>>> de570476c1b0296136f8d3549f9a44d16edae44e
}
