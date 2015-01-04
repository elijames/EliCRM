<?php
/**
 * Created by PhpStorm.
 * User: elijameslennox
 * Date: 1/3/15
 * Time: 7:29 PM
 */

class Industry extends Eloquent{

    protected $table = 'industrys';

    public function customer(){
        return $this->hasMany('Customer');
    }

}