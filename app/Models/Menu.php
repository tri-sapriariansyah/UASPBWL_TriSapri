<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "tb_menu";
    protected $primaryKey = 'menu_id';
    protected $guarded = [];
    use HasFactory;
}
