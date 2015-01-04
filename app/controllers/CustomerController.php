<?php

class CustomerController extends BaseController {



    public function __construct() {
        $this->beforeFilter('csrf', array('on'=>'post'));
    }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if( Auth::check())
        {
            $customers = Customer::all();
            return View::make('customers.index')
                ->withCustomers($customers);

        }
        else{
            return View::make('users.login');
        }
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if( Auth::check()){
            return View::make('customers.create');
        }
        else{
            return View::make('users.login');
        }
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
        if( Auth::check()){
            $rules = array(
                'name' => 'required',
                'address1' => 'required',
                'city' => 'required',
                'state' => 'required|max:2',
                'zip' => 'required|min:5',
                'industry' => 'required'

            );

            $validator = Validator::make(Input::all(), $rules);

            $messages = $validator->messages();

            if ($validator->fails())
            {
                return View::make('users.create')->withMessages($validator);
            }

            $customer = new Customer();

            $customer->name = Input::get('name');
            $customer->address1 = Input::get('address1');
            $customer->address2 = Input::get('address2');
            $customer->city = Input::get('city');
            $customer->state =Input::get('state');
            $customer->zip = Input::get('zip');
            $customer->industry = Input::get('industry');

            $customer->save();

            $customers = Customer::all();

            return View::make('customers.index')
                ->withCustomers($customers)
                ->withMessages('User successfully added!');


        }
        else{
            return View::make('users.login');
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

        if(Auth::check()){
            $customer = Customer::findOrFail($id);
            $contacts = $customer->customerContact->all();
            $notes = $customer->getNotes();
            return View::make('customers.show')
                ->withContacts($contacts)
                ->withNotes($notes)
                ->withCustomer($customer);
        }
        else{
            return View::make('users.index');
        }
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		if(Auth::check()){
            $customer = Customer::findOrFail($id);
            return View::make('customers.edit')->withCustomer($customer);
        }
        else{
            return View::make('users.login');
        }
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
