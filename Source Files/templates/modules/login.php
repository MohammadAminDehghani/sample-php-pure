<?php

function getTitle(): string
{
    return 'login';
}

function getContent()
{ ?>
    <p> Login form place! number of users: <?php echo userCounts(); ?> </p>
    <p> <?php var_dump(userExist('admin')); ?>  </p>
    <p>name karbar: <?php echo getUser('asgharnia')['first_name'].' '.getUser('asgharnia')['last_name']; ?></p>
     <?php updateUser([
        'username' =>'asgharnia',
        'password' =>'123',
        'first_name' =>'nader',
        'last_name' =>'kamali',
    ]); ?>
<?php
}
?>