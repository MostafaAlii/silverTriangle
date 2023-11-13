<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
class Slider extends Model {
    use Translatable;
    protected $table = 'sliders';
    protected $fillable = ['image', 'status'];
    protected $with = ['translations'];
    public $translatedAttributes = ['name', 'description', 'note'];
    public $timestamps = true;
    protected $appends = ['image_path'];

    public function getImagePathAttribute() {
        return asset('dashboard/uploads/slider_images/' . $this->image);
    }
}
