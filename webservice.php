<?php
	$message = array(
		"type"=>"",
		"info"=>"",
	);

	if( move_uploaded_file( $_FILES[ 'file' ][ 'tmp_name' ], $_FILES[ 'file' ][ 'name' ] ) ){
		$message[ 'type' ] = 'success';
		$message[ 'info' ] = 'Your file has been uploaded successfully !';
		echo json_encode( array( $message ) );
	}
	
?>