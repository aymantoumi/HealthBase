<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\Action;
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

        $patients = [];

        // Generate test data
        for ($i = 0; $i < 100; $i++) {
            $firstNames = ['David', 'Emily', 'William', 'Olivia', 'Michael', 'Sophia', 'Christopher', 'Isabella'];
            $lastNames = ['Smith', 'Jones', 'Brown', 'Johnson', 'Garcia', 'Davis', 'Wilson', 'Taylor'];
            $categories = ['Adult', 'Child'];
            $genders = ['Male', 'Female'];
            $phone = rand(100, 999) . '-' . rand(100, 999) . '-' . rand(1000, 9999);

            $patient = [
                'First_Name' => $firstNames[array_rand($firstNames)],
                'Last_Name' => $lastNames[array_rand($lastNames)],
                'CIN' => strtoupper(substr(uniqid('', true), -6)),
                'Category' => $categories[array_rand($categories)],
                'Birth_Date' => date('Y-m-d', strtotime('-' . rand(1, 40) . ' years')),
                'Gender' => $genders[array_rand($genders)],
                'Phone' => $phone,
            ];

            $patients[] = $patient;
        }

        // Insert test data into database
        // Insert test data into database
        foreach ($patients as $patientData) {
            $patient = new Patient();
            $patient->fill($patientData);
            $patient->save();

            // Generate a random action for the patient
            $actions = ['Appointment', 'Prescription', 'Test'];
            $action = new Action();
            $action->Patien_ID = $patient->id;
            $action->Action = $actions[array_rand($actions)];
            $action->Payment = rand(25, 150);
            $action->save();
        }
    }
}
