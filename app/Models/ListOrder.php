<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListOrder extends Model
{
    use HasFactory;
    protected $table = "tb_list_order";
    protected $primaryKey = 'list_order_id';
    protected $guarded =[];
}
