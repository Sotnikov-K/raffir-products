<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Lot
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $slug
 * @property string|null $type
 * @property string|null $lot_origin
 * @property int|null $lot_weight
 * @property string|null $lot_status
 * @property string|null $lot_size_title
 * @property string|null $lot_annotation
 * @property int|null $lot_count
 * @property string|null $lot_price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Image[] $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Item[] $items
 * @property-read int|null $items_count
 * @method static \Illuminate\Database\Eloquent\Builder|Lot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lot query()
 * @method static \Illuminate\Database\Eloquent\Builder|Lot whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lot whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lot whereLotAnnotation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lot whereLotCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lot whereLotOrigin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lot whereLotPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lot whereLotSizeTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lot whereLotStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lot whereLotWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lot whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lot whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lot whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lot whereUserId($value)
 * @mixin \Eloquent
 */
class Lot extends Model
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
                return $imageTime;
            } else {
                $imageTime = $this->created_at->year . '-' . $this->created_at->month;
                return $imageTime;
            }
        }
    }

    public function items(){
        return $this->hasMany(Item::class, 'lot_id', 'id');
    }

}
