<?php

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Clinic';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
} 