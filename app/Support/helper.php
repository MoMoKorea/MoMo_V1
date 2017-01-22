<?php

function getSalt() {
    return 'zktpfwhzos%&4';
}

function getPasswordWithSalt($password) {
    return (getSalt() . $password);
}