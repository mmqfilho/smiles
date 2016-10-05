<?php
/**
 * Smiles Generator and tools
 * @author: Marcos Menezes <mmqfilho@gmail.com>
 * @since: 2016-09-15
 */

namespace Mmqfilho\Smiles;

Class Smiles 
{
	/**
	 * Verify smiles number
	 */
	public function checkSmiles ( $number ) {

		if ( strlen ( $number ) < 8 ){
			return false;
		}
		
		$digit = substr ( $number , 7 , 1 );
		$number = substr ( $number , 0 , 7 );
		
		return ( $digit == ( $number - ( floor ( $number / 7 ) * 7 )  ) ) ? TRUE : FALSE;
	}
	
	/**
	 * Create a smiles number
	 * @return string
	 */
	public function createSmiles ( ) {
		
		$number = '';
		
		for ( $x = 0; $x <= 7; $x++ ) {
			$number .= rand( 0 , 9 );
		}
		
		$digit = $number - ( floor ( $number / 7 ) * 7 );
		
		return $number . '-' . $digit ;
	}

}
