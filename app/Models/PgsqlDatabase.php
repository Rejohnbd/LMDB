<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PgsqlDatabase extends Model
{
    protected $connection = 'pgsql';

    use HasFactory;
}
