<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class DaftarMenu extends Model
{
    use HasFactory;
    protected $table = "tb_daftar_menu";
    protected $primaryKey = 'menu_id';
    protected $guarded =[];
        
    
}
