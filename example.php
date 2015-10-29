<?php

## Simple command-line script to show examples

require "./DigiCube.php";

$config = array(
    'user' => 'digicuberpc',
    'pass' => '--password--',
    'host' => '127.0.0.1',
    'port' => '9902' );

// create client conncetion
$digicube = new DigiCube( $config );


// create a new address
$address = $digicube->get_address( 'name' );
print( "Address: $address \n" );

// list accounts in wallet
print_r( $digicube->list_accounts() );

// get balance in wallet
print( "name: " . $digicube->get_balance( 'name' ) );

// move money from accounts in wallet
// moves from 'name2' to account 'name'
$blaze->move( 'name2', 'name', 10000 );

// send money externally (withdraw)
// send from account to external address
$blaze->send( 'name', 'CVrzSbK4Nubf7xer7w5Es8gVdNZFnnTiPs', 100 );
