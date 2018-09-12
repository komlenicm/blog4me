<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => "Blog4me",
            'address' => 'Random address',
            'contact_number' => '123 456',
            'contact_email' => 'info@blog4me.com'
        ]);
    }
}
