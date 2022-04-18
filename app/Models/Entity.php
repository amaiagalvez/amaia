<?php

namespace App\Models;

use App\Casts\Address;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Entity extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "entities";

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'address_line_1',
        'address_line_2',
        'city',
        'country'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'active' => 'boolean',
        'address' => Address::class
    ];

    /**
     * Relationships
     */

    /**
     * Scopes
     */
}
