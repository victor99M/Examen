<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class usersSeeder extends Seeder
{
    public function run()
    {

        $this->db->table('users')->where('id >',0)->delete();
        //
        for($i=1;$i<=5;$i++)
        {
            $data = [
                'first_name'    => 'Victor'.$i,
                'last_name'    => 'Sandoval'.$i,
                'address'    => 'Real de las magnolias nummero #'.$i,
            ];
             // Using Query Builder
            $this->db->table('users')->insert($data);
        }

       
       
    }
}
