<?php 


phpinfo();


$serverName = "(local)\sqlexpress"; 

/* Connect using Windows Authentication. */  
try  
{  
    $conn = new PDO( "sqlsrv:server=$serverName ; Database=commerciale", "sa", "commerciale");  
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
}  
catch(Exception $e)  
{   
    die( print_r( $e->getMessage() ) );   
}  