<?php 
    class User {
        public $username;
        private $email;

    public function __construct($username, $email){
      //$this->username = 'ken';
      $this->username = $username;
      $this->email = $email;
    }

    public function addFriend(){
      //return "added a new friend";
      return "$this->username just added a new friend";
    }

    // getters
    public function getEmail(){
        return $this->email;
    }

    // setters
    public function setEmail($email){
        if(strpos($email,'@') > -1 ){
            $this->email = $email;
        }
    }
    

  }
  
  class AdminUser extends User {
    public $level;

    public function __construct($username, $email, $level)
    {
        $this->level=$level;
        parent::__construct($username,$email);
    }
  }

  $userOne = new User('mario', 'mario@thenetninja.co.uk');
  $userTwo = new User('luigi', 'luigi@thenetninja.co.uk');

  $userThree =  new AdminUser('yoshi','yoshi@thenetninja.co.uk',5);
  echo $userThree->username . "<br>";
  echo $userThree->getEmail() . "<br>";
  echo $userThree->level . "<br>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>