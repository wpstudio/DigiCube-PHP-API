# DigiCube-PHP-API
==================

A basic PHP library for interacting with digicubed - http://digicube.club

I plan to expand upon the end points of the API.  Right now accounts and movement of coins is working.

*Notes:* You can follow along (and suggest... please do) which API endpoints I work on next.  Head to the [issues area](https://github.com/wpstudio/DigiCube-PHP-API/issues) to contribute or to see what upcoming endpoints will be added to this api.


## Requirements

Requires **digicubed** to already be installed and running on your local server or reachable by your server.

Get DigiCube source from: https://github.com/DigiCubeCrypto/DigiCube


## Usage:

Example use, see examples.php for more

```
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
print( $address );

// check balance
print( "name: " . $digicube->get_balance( 'name' ) );

// send money externally (withdraw)
$digicube->send( 'name', 'CVrzSbK4Nubf7xer7w5Es8gVdNZFnnTiPs', 100 );

```

