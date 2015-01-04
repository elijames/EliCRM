<?php
/**
 * Created by PhpStorm.
 * User: elijameslennox
 * Date: 1/3/15
 * Time: 7:41 PM
 */

class TopicCategory extends Eloquent{

    protected $table = 'topicCategorys';

    public function note(){
        return $this->hasMany('Note');

    }

}