<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function getImage() {
        foreach ($this->images as $img) {
            return $img->image;
        }
    }

    public function getImageTime(){
        foreach ($this->images as $img) {
            if($this->created_at->month < 10) {
                $imageTime = $this->created_at->year . '-' . 0 . $this->created_at->month;
                // dd($imageTime);
                return $imageTime;
            } else {
                $imageTime = $this->created_at->year . '-' . $this->created_at->month;
                // dd($imageTime);
                return $imageTime;
            }
        }
    }


    /**
     * Связь «многие ко многим» таблицы `products` с таблицей `baskets`
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function baskets() {
        return $this->belongsToMany(Basket::class)->withPivot('quantity');
    }

}

