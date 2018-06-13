<?php

use Illuminate\Database\Seeder;
use League\Csv\Reader;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // $this->call(UsersTableSeeder::class);
        $path = resource_path() .'/assets/data/datas.csv';
	    $reader = Reader::createFromPath($path, 'r');

	    $records = $reader->getRecords(['name', 'job', 'phone', 'mail', 'address', 'postal_code', 'town', 'biography']);
	    foreach ($records as $offset => $record) {
	        var_export($record);

	        DB::table('persons')->insert([
	            'name' => $record['name'],
	            'job' => $record['job'],
	            'phone' => $record['phone'],
	            'mail' => $record['mail'],
	            'address' => $record['address'],
	            'postal_code' => $record['postal_code'],
	            'town' => $record['town'],
	            'biography' => $record['biography'],

	        ]);
        }
    }
}

    
 