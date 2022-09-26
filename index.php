<?php 
    class User {
        // prop and method
        public $username;
        public $email;


        public function __construct($username,$email)
        {
            $this->username = $username;
            $this->email = $email;
        }
        public function addFriends(){
            
            return "$this->username added a new friends";
        }
    }

    $userOne = new User('husain','husain@ninja.com');
    $userTwo = new User('fadhil','fadhil@ninja.com');

    // echo get_class($userOne);
    echo $userOne->username . "<br>";
    echo $userOne->email . "<br>";
    echo $userOne->addFriends() . "<br>";

    echo $userTwo->username . "<br>";
    echo $userTwo->email . "<br>";
    echo $userTwo->addFriends() . "<br>";


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