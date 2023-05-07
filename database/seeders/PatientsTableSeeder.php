<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $patiens = [
            ['First_Name' => 'David',        'Last_Name' => 'Smith',        'CIN' => 'FR187823',        'Category' => 'Adult',        'Birth_Date' => '1985-05-23',        'Gender' => 'Male',        'Phone' => '555-123-4567',        'Payment' => 75.00,],
            ['First_Name' => 'Emily',        'Last_Name' => 'Jones',        'CIN' => 'CA184829',        'Category' => 'Adult',        'Birth_Date' => '1990-02-14',        'Gender' => 'Female',        'Phone' => '555-555-5555',        'Payment' => 100.00,],
            ['First_Name' => 'William',        'Last_Name' => 'Brown',        'CIN' => 'TX187234',        'Category' => 'Child',        'Birth_Date' => '2015-09-10',        'Gender' => 'Male',        'Phone' => '555-999-1234',        'Payment' => 50.00,],
            ['First_Name' => 'Olivia',        'Last_Name' => 'Johnson',        'CIN' => 'MI189012',        'Category' => 'Child',        'Birth_Date' => '2012-06-02',        'Gender' => 'Female',        'Phone' => '555-777-8888',        'Payment' => 25.00,],
            ['First_Name' => 'Michael',        'Last_Name' => 'Garcia',        'CIN' => 'NY180987',        'Category' => 'Adult',        'Birth_Date' => '1975-12-25',        'Gender' => 'Male',        'Phone' => '555-111-2222',        'Payment' => 150.00,],
            ['First_Name' => 'Sophia',        'Last_Name' => 'Davis',        'CIN' => 'AZ184567',        'Category' => 'Child',        'Birth_Date' => '2013-03-17',        'Gender' => 'Female',        'Phone' => '555-444-5555',        'Payment' => 50.00,],
            ['First_Name' => 'Christopher',        'Last_Name' => 'Wilson',        'CIN' => 'WA187890',        'Category' => 'Adult',        'Birth_Date' => '1982-08-05',        'Gender' => 'Male',        'Phone' => '555-222-3333',        'Payment' => 100.00,],
            ['First_Name' => 'Isabella',        'Last_Name' => 'Taylor',        'CIN' => 'FL183456',        'Category' => 'Child',        'Birth_Date' => '2014-11-18',        'Gender' => 'Female',        'Phone' => '555-666-7777',        'Payment' => 25.00,],
            // Add more test data here...
        ];

        // Insert test data into database
        foreach ($patiens as $patientData) {
            $patient = new Patient();
            $patient->fill($patientData);
            $patient->save();
        }
    }
}
