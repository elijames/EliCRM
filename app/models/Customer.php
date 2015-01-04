<?php
/**
 * Created by PhpStorm.
 * User: elijameslennox
 * Date: 1/3/15
 * Time: 7:28 PM
 */

class Customer extends Eloquent{

    protected $table = 'customers';

    public function customerContact(){
        return $this->hasMany('CustomerContact');
    }

    public function industry(){
        return $this->belongsTo('Industry');
    }

    public function getIndustry(){
        $industryID = $this->industry;
        $industry = Industry::findOrFail($industryID);
        return $industry->industry;
    }

    public function getNotes(){
        $id = $this->id;
        $notes = DB::table('notes')
            ->join('customerContacts', 'notes.customerContactID', '=', 'customerContacts.id')
            ->join('customers', 'customerContacts.customer_ID', '=', 'customers.id')
            ->where('customers.id', '=', $id)
            ->select('notes.id')
            ->get();

        return $notes;
    }

}