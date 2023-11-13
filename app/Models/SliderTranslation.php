<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderTranslation extends Model {
    protected $table = 'slider_translations';
    protected $fillable = ['name', 'description', 'note'];
    public $timestamps = false;
    
}
