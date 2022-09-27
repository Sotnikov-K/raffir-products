<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Item
 *
 * @property int $id
 * @property int|null $lot_id
 * @property string|null $animal_type
 * @property string|null $animal_type_latin
 * @property string|null $item_type
 * @property int|null $item_weight
 * @property int|null $item_size_length
 * @property int|null $item_size_width
 * @property int|null $item_size_height
 * @property int|null $item_size_diameter
 * @property int|null $item_grade
 * @property string|null $item_rarity
 * @property string|null $item_color
 * @property string|null $item_condition
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Item newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Item newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Item query()
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereAnimalType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereAnimalTypeLatin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereItemColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereItemCondition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereItemGrade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereItemRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereItemSizeDiameter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereItemSizeHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereItemSizeLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereItemSizeWidth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereItemType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereItemWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereLotId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Item extends Model
{
    use HasFactory;
    protected $fillable = ['lot_id','animal_type','item_weight'];


}
