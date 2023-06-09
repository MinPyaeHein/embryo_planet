<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GpImage extends Model
{
    use HasFactory;
    protected $fillable = ["id", "group_id", "name_en", "name_th", "name_ch", "created_at", "updated_at",];
}
