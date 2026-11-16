<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Represents an inquiry submitted via the website contact form.
 */
class ContactMessage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
    ];
}
