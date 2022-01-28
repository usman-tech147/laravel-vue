<?php

namespace App\Models\Artist;

use App\Traits\UuId;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory,UuId;

    protected $guarded = ['id'];
}
