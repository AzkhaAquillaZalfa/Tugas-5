<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'welcome_message',
    'name',
    'nickname',
    'birth_place',
    'birth_date',
    'address',
    'email',
    'phone',
    'education',
    'hobby',
    'about',
])]
class Biodata extends Model
{
    protected $table = 'biodata';

    protected function casts(): array
    {
        return [
            'birth_date' => 'date',
        ];
    }

    public static function profile(): self
    {
        return self::query()->firstOrFail();
    }
}
