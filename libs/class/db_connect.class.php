<?php

class db_connect{
    	  
   function db_connect_mysql(){
   		
	   	try{

			$dbc = new PDO('mysql:host=host; dbname=name', 'iso200_8', 'pass');
			$dbc -> query ('SET NAMES utf8');
			$dbc -> query ('SET CHARACTER_SET utf8_unicode_ci');
	   			   	   			   		
	   		return $dbc;
	   		
	   		
	   	}catch(PDOException $e){
	   			
	    		echo 'Błąd połączenia z bazą danych !';
	    		//echo $e->getMessage();
	
	    }	
    }
   
    
}


?>