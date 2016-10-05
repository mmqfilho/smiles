<?php
include_once 'src/smiles.class.php';
use Mmqfilho\Smiles;

// create object
$sml = new Smiles\Smiles( );

// creating a new number
$n = $sml->createSmiles( );

// testing the number
$test = $sml->checkSmiles( $n );
var_dump ( $test );
