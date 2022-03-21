<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content'
    ];

    /**
     * Additional attributes which should be treated as Carbon objects
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];



    /**
     * Relationships
     *
     */

    public function user() {
        return $this->belongsTo('App\User');
    }

}
