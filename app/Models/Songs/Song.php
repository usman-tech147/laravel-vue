<?php

namespace App\Models\Songs;

use App\Traits\UuId;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory,UuId;

    protected $guarded = ['id'];
}
