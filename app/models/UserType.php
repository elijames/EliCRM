<?php
/**
 * Created by PhpStorm.
 * User: elijameslennox
 * Date: 1/3/15
 * Time: 7:51 PM
 */

class UserType extends Eloquent{

    protected $table = "userTypes";

    public function user(){
        return $this->hasMany('User');
    }



}