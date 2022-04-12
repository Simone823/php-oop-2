<?php 

    require_once __DIR__ . "./user.php";
    require_once __DIR__ . "./userRegistered.php";
    require_once __DIR__ . "./creditCard.php";



    $creditcard1 = new CreditCard('4000340406860375', 2010, '333', 'mario', 'rossi');
    var_dump($creditcard1);

    $user1 = new User('Mario', 'Rossi', 30, 'euivbheuvb', $creditcard1);
    var_dump($user1);

    $userRegistered = new UserRegistered('Mario', 'Rossi', 30, 'uhgberyfe', 'jievbhe', $creditcard1);
    var_dump($userRegistered);
?>