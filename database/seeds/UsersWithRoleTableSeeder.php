<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersWithRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Member

        $member = new User();
        $member->email = 'member@revv.com';
        $member->password = Hash::make('memberpsw');
        $member->gender = 0;
        $member->firstname = 'member';
        $member->lastname = 'member';
        $member->birthdate = '2000-01-01';
        $member->address_line1 = 'rue des members';
        $member->zipcode = '26000';
        $member->city = 'dtc';
        $member->phone_1 = '1111111111';
        $member->newspaper = 0;
        $member->newsletter = 0;
        $member->comment = 'Je suis un member';
        $member->save();

        $member->role()->update(['role_type_id' => 1]);

        //Admin

        $admin = new User();
        $admin->email = 'admin@revv.com';
        $admin->password = Hash::make('adminpsw');
        $admin->gender = 0;
        $admin->firstname = 'admin';
        $admin->lastname = 'admin';
        $admin->birthdate = '2000-02-02';
        $admin->address_line1 = 'rue des admins';
        $admin->zipcode = '26000';
        $admin->city = 'dtc';
        $admin->phone_1 = '2222222222';
        $admin->newspaper = 0;
        $admin->newsletter = 0;
        $admin->comment = 'Je suis un admin';
        $admin->save();

        $admin->role()->update(['role_type_id' => 2]);

        //SuperAdmin

        $superadmin = new User();
        $superadmin->email = 'superadmin@revv.com';
        $superadmin->password = Hash::make('superadminpsw');
        $superadmin->gender = 0;
        $superadmin->firstname = 'superadmin';
        $superadmin->lastname = 'superadmin';
        $superadmin->birthdate = '2000-03-03';
        $superadmin->address_line1 = 'rue des superAdmin';
        $superadmin->zipcode = '26000';
        $superadmin->city = 'dtc';
        $superadmin->phone_1 = '3333333333';
        $superadmin->newspaper = 0;
        $superadmin->newsletter = 0;
        $superadmin->comment = 'Je suis un superAdmin';
        $superadmin->save();

        $superadmin->role()->update(['role_type_id' => 3]);
    }
}
