<?php

namespace Modules\Moderators\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Moderators\Database\Factories\ModeratorFactory;

class Moderator extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): ModeratorFactory
    // {
    //     // return ModeratorFactory::new();
    // }
}
