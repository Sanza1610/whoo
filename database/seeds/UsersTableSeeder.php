<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
        		[
					'email'      => 'phamquangcuong161091@gmail.com',
					'password'   => bcrypt('12345'),
					'level'      => 1,
					'status'     => 'on',
					'firstname'  => 'Phạm Quang',
					'lastname'   => 'Cường',
					'role_id'    => 1,
					'created_at' => new \DateTime(),
                    'updated_at' => new \DateTime()
	        	]
        );
    }
}
