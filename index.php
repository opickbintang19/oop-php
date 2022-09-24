<?php 
    class User {
        // prop and method
        public $username = "ryu";
        public $email = "ryu@ninja.com";

        public function addFriends(){
            
            return "$this->username added a new friends";
        }
    }

    $userOne = new User();
    $userTwo = new User();

    // echo get_class($userOne);
    echo $userOne->username . "<br>";
    echo $userOne->email . "<br>";
    echo $userOne->addFriends() . "<br>";

    $userTwo->username = 'yoshi';
    $userTwo->email = 'yoshi@ninja.com';

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