<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ketua
        $ketua = factory(User::class)->create([
            'name'     => 'ADMIN',
            'email'    => 'admin@serviceac.com',
            'email_verified_at' => now(),
            'password' => bcrypt('service'),
        ]);

        $ketua->assignRole('admin');

        $this->command->info('>_ Here is your admin details to login:');
        $this->command->warn($ketua->email);
        $this->command->warn('Password is "service"');

        // bendahara
        $bendahara = factory(User::class)->create([
            'name'     => 'PENGAWAS',
            'email'    => 'pengawas@serviceac.com',
            'email_verified_at' => now(),
            'password' => bcrypt('service'),
        ]);

        $bendahara->assignRole('pengawas');

        $this->command->info('>_ Here is your pengawas details to login:');
        $this->command->warn($bendahara->email);
        $this->command->warn('Password is "service"');

        // sekretaris
        $sekretaris = factory(User::class)->create([
            'name'     => 'KEUANGAN',
            'email'    => 'keuangan@serviceac.com',
            'email_verified_at' => now(),
            'password' => bcrypt('service'),
        ]);

        $sekretaris->assignRole('keuangan');

        $this->command->info('>_ Here is your keuangan details to login:');
        $this->command->warn($sekretaris->email);
        $this->command->warn('Password is "service"');

        // anggota
        $anggota = factory(User::class)->create([
            'name'     => 'CUSTOMER',
            'email'    => 'customer@serviceac.com',
            'email_verified_at' => now(),
            'password' => bcrypt('service'),
        ]);

        $anggota->assignRole('customer');

        $this->command->info('>_ Here is your customer details to login:');
        $this->command->warn($anggota->email);
        $this->command->warn('Password is "service"');

        // bersihkan cache
        $this->command->call('cache:clear');
    }
}
