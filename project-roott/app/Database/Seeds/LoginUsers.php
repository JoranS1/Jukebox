<?php

    namespace App\Database\Seeds;

    use CodeIgniter\Database\Seeder;

    class user_login extends Seeder{
        public function run(){
            $data = [
               [
                'username' => 'joran',
                'password' => 'nodle',
               ],
               [
                'username' => 'airto',
                'password' => 'nene',
               ],
            ];

            foreach($data as $userItem){
                $username = $userItem['username'];
                $password = $userItem['password'];
                $this->db->query("INSERT INTO playlistUser (username, password) VALUES ('$username', '$password')");
            }
        }
    }
?>