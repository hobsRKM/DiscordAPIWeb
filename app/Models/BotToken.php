<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BotToken extends Model
{
    use HasFactory;

    protected $table = 'bot_token';

    protected $primaryKey = 'id';
    /**
     * @var mixed|string
     */
    private $token;
}
