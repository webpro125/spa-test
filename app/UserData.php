<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_data';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */

    protected $fillable = [
        'user_id',
        'zip_code',
        'price',
        'score',
        'annual',
        'debts',
        'property_type',
        'home_used',
        'first_buyer',
        'new_construction',
        'desired_loan',
        'is_military',
        'is_bankruptcy',
        'is_foreclosure',
        'is_employeed'
    ];


    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
