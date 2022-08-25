<?php
use App\Models\getUsers;
function userLoginData(){
    $users = new getUsers();

    return $users->where("id", session()->get('id'))->first();
}
?>