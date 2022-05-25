<?php
function get_results_from_db_table( $query, $db_connection, $row ) {
	if ( empty( $query ) ) {
		return;
	}
	$query = $db_connection->query( $query );

	$results_array = array();

	while( $result = $query->fetch_assoc() ){
		if ( in_array( $result[ $row ], $results_array ) ) {
			continue;
		}
		array_push( $results_array, $result[ $row ] );
	}
	

	return $results_array;
}
