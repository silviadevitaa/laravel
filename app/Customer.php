<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //memberi tahu nama mysql_list_table
    protected $table = 'custommer';
pr

    public $timestamps = false;
    //kedua, attributnya
    protected $fillable = [
      'custommer_id',
      'name',
      'address'
    ];

}
