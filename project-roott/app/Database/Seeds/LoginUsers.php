<?php

    namespace App\Database\Seeds;

    use CodeIgniter\Database\Seeder;

    class LoginUsers extends Seeder{
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
                $this->db->query("INSERT INTO playlistusers (username, password) VALUES ('$username', '$password')");
            }
        }
    }
?>