<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Login');
    }
    public function createAccountPage($create){
        return view("login", ["create" => $create]);
    }
    public function loginScreen(){
        $model = new \App\Models\getUsers;
        $user = $model->where("UserName", $this->$request->getPost("UserName"))
                      ->where("PassWord", $this->$request->getPost("PassWord"))
                      ->first();
        if($user === null){
            return redirect()->back()
                             ->with("warning", "This user seems not to exists please put in a valid username")
                             ->withInput();
        }
        else{
            session()->set("id", $user["UserId"]);
            return redirect()->to("/playlist");
        }
    }
    public function createAcc(){
        $model = new \App\Model\getUsers;
        $username = $model->where("UserName", $this->$request->getPost("UserName"))
                    ->first();
        $password = $model->where("PassWord", $this->$request->getPost("Password"))
                    ->first();
        if($password != null && $username != null){
            return redirect()->back()
                             ->with("warning", "This password and/or username is already in use please put in an another password and username")
                             ->withInput();
        }
        elseif(empty($username) || empty($password)){
            return redirect()->back()
                             ->with("warning", "Not everything is filled in yet")
                             ->withInput();
        }
    }
}
