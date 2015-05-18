<?php
/**
 * Requests Handler
 *
 * @package HackerRank Profile Widget
 * @author Henrique Dias <hacdias@gmail.com>
 * @author Luís Soares <lsoares@gmail.com>
 * @version 1.0.0
 */

require_once 'requests-functions.php';

$url = hackerrank_get_url_variables();

if ( count( $url ) < 1 ) {
	exit( 'Few arguments.' );
}

$user        = $url[0];
$method      = isset( $url[1] ) ? $url[1] : null;
$queryString = isset( $_GET ) ? http_build_query( $_GET ) : null;

header( 'Access-Control-Allow-Origin: *' );
header( 'Content-Type: application/json' );

echo hackerrank_get_content( $user, $method, $queryString );
