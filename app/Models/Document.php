<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'template_id',
        'filepath'
    ];

    public function template() {
        return $this->belongsTo(Template::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
