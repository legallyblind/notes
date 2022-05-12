<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'content',
      'slug'
    ];

    protected $appends = ['url'];

    public function user() {
      return $this->belongsTo(User::class);
    }

    public function getUrlAttribute() {
      return URL::to('/note/' . $this->slug);
    }
}
