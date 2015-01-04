<?php
/**
 * Created by PhpStorm.
 * User: elijameslennox
 * Date: 1/3/15
 * Time: 7:40 PM
 */

class Note extends Eloquent{

    protected $table = 'notes';

    public function contactType(){
        return $this->belongsTo('ContactType');
    }

    public function customerContact(){
        return $this->belongsTo('CustomerContact');
    }

    public function topicCategory(){
        return $this->belongsTo('TopicCategory');
    }

    public function user(){
        return $this->belongsTo('User');
    }

    public function userName(){
        $userID = $this->user_id;
        $user = User::findOrFail($userID);
        $userName = $user->userLast.', '.$user->userFirst;
        return $userName;
    }

    public function contactName(){
        $contactID = $this->customerContactID;
        $contact = CustomerContact::findOrFail($contactID);
        $contactName = $contact->lastName.', '.$contact->firstName;
        return $contactName;
    }

}