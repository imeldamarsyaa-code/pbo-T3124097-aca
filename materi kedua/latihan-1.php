<?php
class user {
    private $username;
    private $password;

    public function __construct($user, $pass){
        $this->username = $user;
        $this->password = md5($pass);
    }

    public function getUsername(){
        return $this->username;
    }
}

$user = new user("admin", "12345");
echo $user->getUsername();
?>