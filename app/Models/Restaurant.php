<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Support\Facades\DB;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

/**
 * Class Restaurant
 * @package App\Models
 * @version August 29, 2019, 9:38 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Food
 * @property \Illuminate\Database\Eloquent\Collection Gallery
 * @property \Illuminate\Database\Eloquent\Collection RestaurantsReview
 * @property \Illuminate\Database\Eloquent\Collection User
 * @property \Illuminate\Database\Eloquent\Collection[] Restaurant
 * @property string name
 * @property string description
 * @property string address
 * @property string latitude
 * @property string longitude
 * @property string phone
 * @property string mobile
 * @property double admin_commission
 * @property double delivery_fee
 * @property string information
 */
class Restaurant extends Model implements HasMedia
{
    use HasMediaTrait {
        getFirstMediaUrl as protected getFirstMediaUrlTrait;
    }

    public $table = 'restaurants';
    


    public $fillable = [
        'name',
        'description',
        'address',
        'latitude',
        'longitude',
        'phone',
        'mobile',
        'admin_commission',
        'delivery_fee',
        'information'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'image' => 'string',
        'address' => 'string',
        'latitude' => 'string',
        'longitude' => 'string',
        'phone' => 'string',
        'mobile' => 'string',
        'admin_commission' =>'double',
        'delivery_fee'=>'double',
        'information' => 'string'
    ];

    /**
     * Validation $adminRules
     *
     * @var array
     */
    public static $adminRules = [
        'name' => 'required',
        'description' => 'required',
        'image' => 'required',
        'address' => 'required',
        'latitude' => 'required',
        'longitude' => 'required',
        'admin_commission' => 'required',
    ];

    /**
     * Validation $managerRules
     *
     * @var array
     */
    public static $managerRules = [
        'name' => 'required',
        'description' => 'required',
        'address' => 'required',
        'latitude' => 'required',
        'longitude' => 'required',
    ];

    /**
     * New Attributes
     *
     * @var array
     */
    protected $appends = [
        'custom_fields',
        'has_media',
        'rate'
        
    ];

    /**
     * @param Media|null $media
     * @throws \Spatie\Image\Exceptions\InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
            ->fit(Manipulations::FIT_CROP, 200, 200)
            ->sharpen(10);

        $this->addMediaConversion('icon')
            ->fit(Manipulations::FIT_CROP, 100, 100)
            ->sharpen(10);
    }

    public function customFieldsValues()
    {
        return $this->morphMany('App\Models\CustomFieldValue', 'customizable');
    }

    /**
     * to generate media url in case of fallback will
     * return the file type icon
     * @param string $conversion
     * @return string url
     */
    public function getFirstMediaUrl($collectionName = 'default',$conversion = '')
    {
        $url = $this->getFirstMediaUrlTrait($collectionName);
        $array = explode('.', $url);
        $extension = strtolower(end($array));
        if (in_array($extension,config('medialibrary.extensions_has_thumb'))) {
            return asset($this->getFirstMediaUrlTrait($collectionName,$conversion));
        }else{
            return asset(config('medialibrary.icons_folder').'/'.$extension.'.png');
        }
    }

    public function getCustomFieldsAttribute()
    {
        $hasCustomField = in_array(static::class,setting('custom_field_models',[]));
        if (!$hasCustomField){
            return [];
        }
        $array = $this->customFieldsValues()
            ->join('custom_fields','custom_fields.id','=','custom_field_values.custom_field_id')
            ->where('custom_fields.in_table','=',true)
            ->get()->toArray();

        return convertToAssoc($array,'name');
    }

    /**
     * Add Media to api results
     * @return bool
     */
    public function getHasMediaAttribute()
    {
        return $this->hasMedia('image') ? true : false;
    }

    /**
     * Add Media to api results
     * @return bool
     */
    public function getRateAttribute()
    {
        return $this->restaurantReviews()->select(DB::raw('round(AVG(restaurant_reviews.rate),1) as rate'))->first('rate')->rate;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function foods()
    {
        return $this->hasMany(\App\Models\Food::class, 'restaurant_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function galleries()
    {
        return $this->hasMany(\App\Models\Gallery::class, 'restaurant_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function restaurantReviews()
    {
        return $this->hasMany(\App\Models\RestaurantReview::class, 'restaurant_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function users()
    {
        return $this->belongsToMany(\App\Models\User::class, 'user_restaurants');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function drivers()
    {
        return $this->belongsToMany(\App\Models\User::class, 'driver_restaurants');
    }

    
}
