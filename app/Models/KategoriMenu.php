<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriMenu extends Model
{
    use HasFactory;
    protected $table = "tb_kategori_menu";
    protected $primaryKey = 'kat_id';
    protected $guarded =[];

}
