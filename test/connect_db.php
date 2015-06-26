<?php 

$dbc = @mysqli_connect ( 'http://lunalewis.co.uk/', 'mcredstone', '8Funlittle!', 'site_dbs' ) 

# Otherwise fail gracefully and explain the error.

OR die ( mysqli_connect_error() ) ;

# Set encoding to match PHP script encoding.

mysqli_set_charset( $dbc, 'utf8' ) ;
 ?>
