<?php

function userCounts(): int
{
    global $db;

    $result = $db->query('
        SELECT * FROM users
    ');

    $counter = 0;

    while ($result->fetchArray(1)){
        $counter++;
    }

    return $counter;
}

function adminUser(): void
{
    global $db;
    $db_hash = sha1('123');

    if (!userCounts()){
        $result = $db->query("
        INSERT INTO users (username, password) values ('admin', '$db_hash')
    ");
    }

}

function getUser($username)
{
    global $db;

    $result = $db->query("
        SELECT * FROM users
        WHERE username = '$username'
    ");
    return $result->fetchArray(1);
}

function userExist($username) : bool
{
        return (bool)getUser($username);
}

function addUser($userdata) {
    $username = $userdata['username'];
    if(!$username) {
        return;
    }

    $password = sha1($userdata['password']);
    $first_name = $userdata['first_name'];
    $last_name = $userdata['last_name'];

    global $db;
    if(!userExist($username)) {
        $db->query("
            INSERT INTO users (username, password, first_name, last_name) VALUES
            ('$username', '$password', '$first_name', '$last_name');
        ");

    } else {
        $db->query("
            UPDATE users
            SET password = '$password', first_name = '$first_name', last_name = '$last_name'
            WHERE username = '$username';
        ");

    }
}

function updateUser($userdata) {
    addUser($userdata);
}

function deleteUser($username) {
    if(!userExist($username)) {
        return;
    }

    global $db;
    $db->query("
        DELETE FROM users
        WHERE username = '$username';
    ");
}
