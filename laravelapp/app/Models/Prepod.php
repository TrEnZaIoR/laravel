<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prepod extends Model
{
    use HasFactory;
    public function prepod(){
        return DB::table('prepods')->select('*')->get();
    } 
}
