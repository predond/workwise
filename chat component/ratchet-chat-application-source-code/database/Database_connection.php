<?php

//Database_connection.php

class Database_connection
{
	function connect()
	{
		$connect = new PDO("mysql:host=localhost; dbname=workwise_chat", "root", "");

		return $connect;
	}
}

?>