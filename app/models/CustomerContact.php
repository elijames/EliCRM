<?php
/**
 * Created by PhpStorm.
 * User: elijameslennox
 * Date: 1/3/15
 * Time: 7:27 PM
 */

class CustomerContact extends Eloquent{

    protected $table = 'customerContacts';

    public function customer(){
        return $this->belongsTo('Customer');
    }

    public function note(){
        return $this->hasMany('Note');
    }

    public function fullName(){
        $fullName = $this->lastName.', '.$this->firstName;
        return $fullName;
    }

}