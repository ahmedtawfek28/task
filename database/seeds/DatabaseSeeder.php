<?php

use Illuminate\Database\Seeder;
use App\Department;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
     public function run()
    {
        $Departments = $this->defaultDepartments();
        foreach ($Departments as $Department) {
            Department::firstOrCreate(['name' => $Department]);
        }

        $users = [
            ['name' => 'Mohamed Samy','email' => 'mohamedsamy@gmail.com','department_id' => '1','manager_id' => '0','password' => '$2y$10$ijYj8RNroDqaJL47NzDcEu/Uwhlin2WklcaWuOKZIx5G8vNRywIN.',],
            ['name' => 'Mahmod Ramadan','email' => 'mahmodramadan@gmail.com','department_id' => '1','manager_id' => '1','password' => '$2y$10$ijYj8RNroDqaJL47NzDcEu/Uwhlin2WklcaWuOKZIx5G8vNRywIN.',],
            ['name' => 'Ahmed Mostafa','email' => 'ahmedmostafa@gmail.com','department_id' => '1','manager_id' => '1','password' => '$2y$10$ijYj8RNroDqaJL47NzDcEu/Uwhlin2WklcaWuOKZIx5G8vNRywIN.',],
            ['name' => 'Eman Elaraby','email' => 'emanalaraby@gmail.com','department_id' => '1','manager_id' => '1','password' => '$2y$10$ijYj8RNroDqaJL47NzDcEu/Uwhlin2WklcaWuOKZIx5G8vNRywIN.',],
            ['name' => 'Rehab Elsayed','email' => 'rehabelsied@gmail.com','department_id' => '1','manager_id' => '1','password' => '$2y$10$ijYj8RNroDqaJL47NzDcEu/Uwhlin2WklcaWuOKZIx5G8vNRywIN.',],
            ['name' => 'Alaa Said','email' => 'alaasaid@gmail.com','department_id' => '2','manager_id' => '0','password' => '$2y$10$ijYj8RNroDqaJL47NzDcEu/Uwhlin2WklcaWuOKZIx5G8vNRywIN.',],
            ['name' => 'Eman Hassan','email' => 'emanhassan@gmail.com','department_id' => '2','manager_id' => '6','password' => '$2y$10$ijYj8RNroDqaJL47NzDcEu/Uwhlin2WklcaWuOKZIx5G8vNRywIN.',],
            ['name' => 'Shreef Ali','email' => 'shreefali@gmail.com','department_id' => '2','manager_id' => '6','password' => '$2y$10$ijYj8RNroDqaJL47NzDcEu/Uwhlin2WklcaWuOKZIx5G8vNRywIN.',],
            ['name' => 'khaled mohamed','email' => 'khaledmohamed@gmail.com','department_id' => '3','manager_id' => '0','password' => '$2y$10$ijYj8RNroDqaJL47NzDcEu/Uwhlin2WklcaWuOKZIx5G8vNRywIN.',],
            ['name' => 'Eman ahmed','email' => 'emanahmed@gmail.com','department_id' => '3','manager_id' => '9','password' => '$2y$10$ijYj8RNroDqaJL47NzDcEu/Uwhlin2WklcaWuOKZIx5G8vNRywIN.',],
            ['name' => 'Shreef Mohamed','email' => 'shreefmohamed@gmail.com','department_id' => '3','manager_id' => '9','password' => '$2y$10$ijYj8RNroDqaJL47NzDcEu/Uwhlin2WklcaWuOKZIx5G8vNRywIN.',],
            ['name' => 'Mohamed Gamal','email' => 'mohamedgmal@gmail.com','department_id' => '4','manager_id' => '0','password' => '$2y$10$ijYj8RNroDqaJL47NzDcEu/Uwhlin2WklcaWuOKZIx5G8vNRywIN.',],
            ['name' => 'Ahmed Ali','email' => 'ahmedali@gmail.com','department_id' => '4','manager_id' => '12','password' => '$2y$10$ijYj8RNroDqaJL47NzDcEu/Uwhlin2WklcaWuOKZIx5G8vNRywIN.',],
            ['name' => 'Amin Said','email' => 'aminsaid@gmail.com','department_id' => '4','manager_id' => '12','password' => '$2y$10$ijYj8RNroDqaJL47NzDcEu/Uwhlin2WklcaWuOKZIx5G8vNRywIN.',],
            
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
    private function defaultDepartments()
    {
        return ['Computer Science', 'Sales', 'Marketing','Customer Care'];
    }
}
