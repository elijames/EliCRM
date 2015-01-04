<?php
/**
 * Created by PhpStorm.
 * User: elijameslennox
 * Date: 1/3/15
 * Time: 7:26 PM
 */

class ContactType extends Eloquent{

    protected $table = 'contactTypes';

    public function note(){
        return $this->hasMany('Note');
    }


}