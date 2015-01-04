<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('CustomerContactTableSeeder');

        $this->command->info('User table seeded!');
	}


}

class CustomerContactTableSeeder extends Seeder {

    public function run()
    {

        DB::table('customerContacts')->delete();

        CustomerContact::create(array('customerID' => 1, 'lastName' => 'James', 'firstName' => 'Eli', 'email' => 'eli@elijamesorganization.com', 'phone'=> '6193079283', 'Title' => 'Lead Developer'));
        CustomerContact::create(array('customerID' => 1, 'lastName' => "O'Rally", 'firstName'=>'Bill', 'email'=> 'littlebrat@elijamesorganization.com', 'phone'=> '6193079283', 'Title' => 'Top Dog' ));
    }

}
