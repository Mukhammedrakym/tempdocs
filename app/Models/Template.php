<?php

namespace App\Models;

use App\Http\Requests\DocumentForm;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'filepath',
      'fields'
    ];

    public function documents() {
        return $this->hasMany(Document::class)->orderByDesc('created_at');
    }
    public function document($id, DocumentForm $request) {

    }
}
