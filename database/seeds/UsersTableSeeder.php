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
        // option 1: setting single properties
        $user = new User;
        $user->name = 'Indiana Jones';
        $user->email = 'indiana.jones@gmail.com';
        $user->password = Hash::make('Dk324c#$34-');
        $user->save();

        // option 2: setting an array of attributes
        User::create(['name'=>'Clark Kent',
                      'email'=>'clark.kent@gmail.com',
                      'password'=>bcrypt('a99sck@ljc')
                    ]);

        // option 3: using faker -- creates 10 users
        factory(User::class, 10)->create();
    }
}
