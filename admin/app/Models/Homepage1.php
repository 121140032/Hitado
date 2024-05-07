<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage1 extends Model
{
   protected $table = 'homepage1';

   /**
     * Mendapatkan semua data pengguna.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */

   
   public static function getAllUsers()
   {
        return self::all();
   }
}
