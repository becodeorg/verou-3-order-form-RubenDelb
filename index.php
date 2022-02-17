<?php

// This file is your starting point (= since it's the index)
// It will contain most of the logic, to prevent making a messy mix in the html

// This line makes PHP behave in a more strict way
declare(strict_types=1);

// Show all error messages
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// We are going to use session variables so we need to enable sessions
session_start();

// Use this function when you need to need an overview of these variables
function pre_r( $array ) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    pre_r($_GET);
    echo '<h2>$_POST</h2>';
    pre_r($_POST);
    // echo '<h2>$_COOKIE</h2>';
    // pre_r($_COOKIE);
    // echo '<h2>$_SESSION</h2>';
    // pre_r($_SESSION);
}
whatIsHappening();

// Provide some products (you may overwrite the example)
$products = [
    ['name' => 'Panda Mug', 'price' => 12],
    ['name' => 'Seal Mug', 'price' => 12],
    ['name' => 'Unicorn Mug', 'price' => 13],
    ['name' => 'Cow Mug', 'price' => 12],
    ['name' => 'Beans Mug', 'price' => 11.5],
    ['name' => 'Chalk Mug', 'price' => 9],
    ['name' => 'Ctrl-Alt-Del Mugset', 'price' => 16],
    ['name' => 'Anti Theft Mug', 'price' => 8.5],
];

$totalValue = 0;

function validate()
{
    // This function will send a list of invalid fields back
    return [];
}

function handleForm()
{
    // TODO: form related tasks (step 1)

    // Validation (step 2)
    $invalidFields = validate();
    if (!empty($invalidFields)) {
        // TODO: handle errors
    } else {
        // TODO: handle successful submission
    }
}

// TODO: replace this if by an actual check
$formSubmitted = false;
if ($formSubmitted) {
    handleForm();
}

require 'form-view.php';