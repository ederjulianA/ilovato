<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        'Facebook' => array(
            'client_id'     => '311109345725776',
            'client_secret' => 'dd28659b0977cfd63b061a13fa54d02a',
            'scope'         => array('email','read_friendlists','user_online_presence'),
        ),		

	)

);