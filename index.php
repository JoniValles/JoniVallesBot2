<?php
/*
* This file is part of GeeksWeb Bot (GWB).
*
* GeeksWeb Bot (GWB) is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License version 3
* as published by the Free Software Foundation.
* 
* GeeksWeb Bot (GWB) is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.  <http://www.gnu.org/licenses/>
*
* Author(s):
*
* © 2015 Kasra Madadipouya <kasra@madadipouya.com>
*
*/
require 'vendor/autoload.php';
$client = new Zelenin\Telegram\Bot\Api('269022555:AAFOpX8kGgLbgYK5Gyh_ek2gpfj6WJWxIpw'); // Set your access token
$url = ''; // URL RSS feed
$update = json_decode(file_get_contents('php://input'));
$command = utf8_decode($update->message->text);
 
//your app
try {
	//http_response_code(200);
    if($update->message->text == '/joni')
    {//http_response_code(200);
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
        	'chat_id' => $update->message->chat->id,
        	'text' => "Ese Joni como mola se merece una oola"
     	]);
		http_response_code(200);
    }
    else if($update->message->text == '/rickroll')
    {
			//http_response_code(200);
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "https://www.youtube.com/watch?v=dQw4w9WgXcQ"
    		]);
			http_response_code(200);
    }else if($update->message->text == '/belen') {
			//http_response_code(200);
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Casuaaaaal"
    		]);
			http_response_code(200);
    }else if($update->message->text == '/tomberi') {
			//http_response_code(200);
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendVideo([
    		'chat_id' => $update->message->chat->id,
    		'video' => "https://media.giphy.com/media/l49K0DUalMrMwE9qg/giphy.gif"
    		]);
			http_response_code(200);
    }else if($update->message->text == '/dimision') {
			//http_response_code(200);
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
$array = array("Picky dimision!!","Picky dimision!!","Picky dimision!!", "Xavi dimision y mas nidos!!","Xavi dimision y mas nidos!!","Xavi dimision y mas nidos!!", "Tauro admin!!","Tauro admin!!","Tauro admin!!", "Paola casual");
			$randIndex = array_rand($array);
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => $array[$randIndex]
    		]);
			http_response_code(200);
    }else if($update->message->text == '/picky') {
			//http_response_code(200);
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Picky dimision!!!!!"
    		]);
			http_response_code(200);
    }else if($update->message->text == '/xavi') {
			//http_response_code(200);
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Estas tardando en confirmar nidos"
    		]);
			http_response_code(200);
    }else if($update->message->text == '/yfoms') {
			//http_response_code(200);
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Viva er Beti manque pierda!"
    		]);
			http_response_code(200);
    }else if($update->message->text == '/paola') {
			//http_response_code(200);
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Casual"
    		]);
			http_response_code(200);
    }else if($update->message->text == '/location') {
			
    	$response = $client->sendLocation([
        		'chat_id' => $update->message->chat->id,
			'latitude' => 43.03434,
			'longitude' => -5.03234
     			]);
				http_response_code(200);
    }else if($update->message->text == '/recompensas') {
			//http_response_code(200);
    	$response = $client->sendPhoto([
        		'chat_id' => $update->message->chat->id,
			'photo' => 'https://i.imgur.com/Jo1U31G.jpg'
     			]);
				http_response_code(200);
    }else if($update->message->text == '/jonidimision') {
			//http_response_code(200);
    	$response = $client->sendVideo([
        		'chat_id' => $update->message->chat->id,
			'video' => 'https://media.giphy.com/media/l0MYSSCIrv8aUaBsQ/giphy.gif'
     			]);
				http_response_code(200);
    }else if($update->message->text == '/dimision') {
			//http_response_code(200);
			
			$array = array("Picky dimision!!","Picky dimision!!","Picky dimision!!", "Xavi dimision y mas nidos!!","Xavi dimision y mas nidos!!","Xavi dimision y mas nidos!!", "Tauro admin!!","Tauro admin!!","Tauro admin!!", "Paola casual");
			$randIndex = array_rand($array);
			$response = $client->sendText([
        		'chat_id' => $update->message->chat->id,
				'text' => "asdas"
     			]);
				http_response_code(200);
    }else if(substr($command, 0, 21) === "¡Comencemos una buena"){
			//http_response_code(200);
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
	$data = utf8_encode("Para añadir tu codigo de amigo a la lista usa el comando: \n/addamigo NOMBRE CODIGO");
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => $data
    		]);
			http_response_code(200);
    }
	
	
	
	##TODO####
	
	
	else if(substr($update->message->text, 0, 6) === "/amigo")
    {
		//http_response_code(200);
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $pokestop = explode(' ', $update->message->text);
 $data = $trainer;
 unset($data[0]);
 unset($data[1]);
 $finalData = implode(" ", $data);
 
 $query = "insert into amigoasturias (Nombre,Codigo) values ('$trainer[1]','$finalData')";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Codigo de amigo confirmado!"
    		]);
			 http_response_code(200);
	}
	
	
	
	else if(substr($update->message->text, 0, 12) === "/listaamigos")
    {
		//http_response_code(200);
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $query = "select * from amigoasturias;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 $data = "";
 
if (mysqli_num_rows($result)==0) { 
$data = "Todavia no se han añadido nidos";
http_response_code(200);
 }else{
	 
 
while ($row = mysqli_fetch_array($result)) {
			$data = $data . "*".$row['Nombre']."* - `". $row['Codigo']."`"."\n";

    }
 }
	
	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
			'parse_mode' => 'Markdown',
    		'text' => $data
    		]);
			 http_response_code(200);
	}
	
	
	
	###########################################################
	###########################################################
	#################INTERCAMBIOS##############################
	###########################################################
	###########################################################
	
	
	else if(substr($update->message->text, 0, 8) === "/ofrezco")
    {
		//http_response_code(200);
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $pokestop = explode(' ', $update->message->text);
 $data = $trainer;
 unset($data[0]);
 //unset($data[1]);
 $finalData = implode(" ", $data);
 $nombre = $update->message->from->username;
 
 $query = "update intercambios set Ofrece = '$finalData' where Nombre = '$nombre'";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "\xF0\x9F\x91\x8D"
    		]);
			 http_response_code(200);
	}
	
	
	
	
	else if(substr($update->message->text, 0, 6) === "/busco")
    {
		//http_response_code(200);
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $pokestop = explode(' ', $update->message->text);
 $data = $trainer;
 unset($data[0]);
 //unset($data[1]);
 $finalData = implode(" ", $data);
 $nombre = $update->message->from->username;
 $ofrece = $data . $finalData;

 
 //$query = "insert into intercambios (Nombre,Busca) values ('$nombre','$trainer[1]')";
 $query = "INSERT INTO intercambios (Nombre,Busca)
SELECT * FROM (SELECT '$nombre','$finalData') AS tmp
WHERE NOT EXISTS (
    SELECT Nombre FROM intercambios WHERE nombre = '$nombre'
) LIMIT 1;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "\xF0\x9F\x91\x8D"
    		]);
			 http_response_code(200);
	}
	
	
	
	else if(substr($update->message->text, 0, 13) === "/intercambios")
    {
		//http_response_code(200);
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $query = "select * from intercambios;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 $data = "";
 
if (mysqli_num_rows($result)==0) { 
$data = "Todavia no se han añadido nidos";
http_response_code(200);
 }else{
	 
 
while ($row = mysqli_fetch_array($result)) {
			$data = $data . "*@".$row['Nombre']."* - *Busca:* ". $row['Busca']. " - *Ofrece:* ".$row['Ofrece']."\n";

    }
 }
	
	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
			'parse_mode' => 'Markdown',
    		'text' => $data
    		]);
			 http_response_code(200);
	}
	
	else if(substr($command, 0, 23) === "Borrar mis intercambios"){
			
		//http_response_code(200);
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $pokestop = explode(' ', $update->message->text);
 $data = $trainer;
 unset($data[0]);
 unset($data[1]);
 $finalData = implode(" ", $data);
 $nombre = $update->message->from->username;

 
 //$query = "insert into intercambios (Nombre,Busca) values ('$nombre','$trainer[1]')";
 $query = "delete from intercambios where Nombre = '$nombre'";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Tus intercambios han sido borrados"
    		]);
			 http_response_code(200);
    }
	
	
	
	
	
	####OVIEDO####
	
	//-1001306418717 TOYOSSE
	//-1001129038952 OVIEDO
	else if($update->message->chat->id === -1001129038952){
	
	
	if(substr($update->message->text, 0, 9 ) === "/misiones")
    {
		//http_response_code(200);
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $query = "select * from misionoviedo;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 $data = "";
 
if (mysqli_num_rows($result)==0) { 
$data = "Todavia no se han añadido misiones";
http_response_code(200);
 }else{
	 
 
while ($row = mysqli_fetch_array($result)) {
		if (empty($row['Latitude'])) {
			$data = $data . "<b>ID:</b> " .$row['id']." - <b>Recompensa:</b> " . $row['Recompensa'] . " -<b> Pokeparada:</b> ". $row['Pokeparada']."\n";
		}else{
		$data = $data . "<b>ID:</b> " .$row['id']." - <b>Recompensa:</b> " . $row['Recompensa'] . " -<b> Pokeparada:</b> ". $row['Pokeparada'] ." - "."https://www.google.com/maps/?q=".$row['Latitude'].",".$row['Longitude'] ."\n";
    	}
    }
 }
	
	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
			'parse_mode' => 'HTML',
    		'text' => $data
    		]);
			 http_response_code(200);
	}
	
	
	else if(substr($update->message->text, 0, 6) === "/lista")
    {
		http_response_code(200);
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
			http_response_code(200);
 die();
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $query = "select * from misionoviedo;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 
while ($row = mysqli_fetch_array($result)) {
		
    	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);
if (empty($row['Latitude'])) {
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
			'parse_mode' => 'HTML',
    		'text' => "<b>ID:</b> " .$row['id']." - <b>Recompensa:</b> " . $row['Recompensa'] . " -<b> Pokeparada:</b> ". $row['Pokeparada']."\n"
    		]);
}else{
	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
			'parse_mode' => 'HTML',
    		'text' => "<b>ID:</b> " .$row['id']." - <b>Recompensa:</b> " . $row['Recompensa'] . " -<b> Pokeparada:</b> ". $row['Pokeparada'] ." - "."https://www.google.com/maps/?q=".$row['Latitude'].",".$row['Longitude'] ."\n"
    		]);
	http_response_code(200);
}
    }
	} 
	
	
	

	
	
	
	
	//UBICACION
	
	
	
	else if(!is_null($update->message->reply_to_message->message_id))
    {
		//http_response_code(200);
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $pokestop = explode(' ', $update->message->text);
 $data = $trainer;
 unset($data[0]);
 unset($data[1]);
 $finalData = implode(" ", $data);
 $latitude = $update->message->location->latitude;
 $longitude = $update->message->location->longitude;
 $username = $update->message->username;
 $a = $update->message->chat->type;
 //$x = $update->message->reply_to_message->text;
 $id = explode(" ", $update->message->reply_to_message->text);

 //$query = "insert into mision (Latitude, Longitude) values ($latitude,$longitude);";
	$query = "update misionoviedo set Latitude = $latitude , Longitude = $longitude where id = '$id[1]';";
 //executing the query 

 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Ubicacion añadida!"
    		]);
			 http_response_code(200);
	}
	
	
	

	
	
	//AÑADIR MISION
	
	else if(substr($update->message->text, 0, 10) === "/confirmar")
    {
		//http_response_code(200);
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $pokestop = explode(' ', $update->message->text);
 $data = $trainer;
 unset($data[0]);
 unset($data[1]);
 $finalData = implode(" ", $data);
 
 $query = "insert into misionoviedo (Recompensa, Pokeparada) values ('$trainer[1]','$finalData')";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Mision confirmada!"
    		]);
			 http_response_code(200);
	}
	
	
	
	
	
	
	
	
	
	
	//BORRAR
	
	else if(substr($update->message->text, 0, 15) === "/borrartodotodo")
    {
		//http_response_code(200);
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
			http_response_code(200);
 die();
 }
 $query = "DELETE FROM misionoviedo;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Borradas todas las misiones!"
    		]);
	}
	
	
	
	
		else if(substr($update->message->text, 0, 10) === "/delmision")
    {
		//http_response_code(200);
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $id = explode(" ", $update->message->text);
 $query = "delete from misionoviedo where id = $id[1] ";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Mision borrada!"
    		]);
			 http_response_code(200);
	}
	
	
	else if(substr($update->message->text, 0, 13) === "/delubicacion")
    {
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $id = explode(" ", $update->message->text);
 $query = "update misionoviedo set Latitude = NULL, Longitude = NULL where id = $id[1] ";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Ubicacion borrada de ID: ". $id[1]
    		]);
			 http_response_code(200);
	}
	
	
	
	
	
	
	
	
	
	
	####NIDOS####
	
	else if(substr($update->message->text, 0, 8) === "/addnido")
    {
		//http_response_code(200);
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $pokestop = explode(' ', $update->message->text);
 $data = $trainer;
 unset($data[0]);
 unset($data[1]);
 $finalData = implode(" ", $data);
 
 $query = "insert into nido (Pokemon, Lugar) values ('$trainer[1]','$finalData')";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Nido confirmado!"
    		]);
			 http_response_code(200);
	}
	
	
	
	else if(substr($update->message->text, 0, 6) === "/nidos")
    {
		//http_response_code(200);
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $query = "select * from nido;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 $data = "";
 
if (mysqli_num_rows($result)==0) { 
$data = "Todavia no se han añadido nidos";
http_response_code(200);
 }else{
	 
 
while ($row = mysqli_fetch_array($result)) {
		if (empty($row['Latitude'])) {
			$data = $data . "<b>ID:</b> " .$row['id']." - <b>Pokemon:</b> " . $row['Pokemon'] . " -<b> Lugar:</b> ". $row['Lugar']."\n";
		}else{
		$data = $data . "<b>ID:</b> " .$row['id']." - <b>Pokemon:</b> " . $row['Pokemon'] . " -<b> Lugar:</b> ". $row['Lugar'] ." - "."https://www.google.com/maps/?q=".$row['Latitude'].",".$row['Longitude'] ."\n";
    	}
    }
 }
	
	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
			'parse_mode' => 'HTML',
    		'text' => $data
    		]);
			 http_response_code(200);
	}
	
	
	
	//BORRAR
	
	else if(substr($update->message->text, 0, 12) === "/borrarnidos")
    {
		//http_response_code(200);
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
			http_response_code(200);
 die();
 }
 $query = "DELETE FROM nido;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Borrados todos los nidos!"
    		]);
	}
	
	
	
	
		else if(substr($update->message->text, 0, 8) === "/delnido")
    {
		//http_response_code(200);
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $id = explode(" ", $update->message->text);
 $query = "delete from nido where id = $id[1] ";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Nido borrado!"
    		]);
			 http_response_code(200);
	}
	
	
	else if(substr($update->message->text, 0, 17) === "/delubicacionnido")
    {
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $id = explode(" ", $update->message->text);
 $query = "update nido set Latitude = NULL, Longitude = NULL where id = $id[1] ";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Ubicacion borrada de ID: ". $id[1]
    		]);
			 http_response_code(200);
	}
	
	
	
	
	
	
	
	
	
	
	####AMIGOS####
	
	
	
	
	
	
	
	
	
	
	else if(substr($update->message->text, 0, 9) === "/addamigo")
    {
		//http_response_code(200);
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $pokestop = explode(' ', $update->message->text);
 $data = $trainer;
 unset($data[0]);
 unset($data[1]);
 $finalData = implode(" ", $data);
 if($trainer != null){
 
 $query = "insert into amigo (Nombre,Codigo) values ('$trainer[1]','$finalData')";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Codigo de amigo confirmado!"
    		]);
			 http_response_code(200);
	}
	else{
		$data = utf8_encode("Para añadir tu codigo de amigo a la lista usa el comando: \n/addamigo NOMBRE CODIGO\nY si no querias añadir ningún código no seas un manazas y le des al comando.");
    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => $data
    		]);
			http_response_code(200);
	}
	}
	
	
	
	else if(substr($update->message->text, 0, 7) === "/amigos")
    {
		//http_response_code(200);
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $query = "select * from amigo;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 $data = "";
 
if (mysqli_num_rows($result)==0) { 
$data = "Todavia no se han añadido nidos";
http_response_code(200);
 }else{
	 
 
while ($row = mysqli_fetch_array($result)) {
			$data = $data . "*".$row['Nombre']."* - `". $row['Codigo']."`"."\n";

    }
 }
	
	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
			'parse_mode' => 'Markdown',
    		'text' => $data
    		]);
			 http_response_code(200);
	}
	
	
	
	
	
	
	
	
} ##FIN OVIEDO
	
	
	
	
	
	
	#####GIJON#####
	
	else if($update->message->chat->id === -1001389004192){
		
		
		if(substr($update->message->text, 0, 9) === "/addamigo")
    {
		//http_response_code(200);
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $pokestop = explode(' ', $update->message->text);
 $data = $trainer;
 unset($data[0]);
 unset($data[1]);
 $finalData = implode(" ", $data);
 
 $query = "insert into amigoGijon (Nombre,Codigo) values ('$trainer[1]','$finalData')";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Codigo de amigo confirmado!"
    		]);
			 http_response_code(200);
	}
	
	
	
	else if(substr($update->message->text, 0, 7) === "/amigos")
    {
		//http_response_code(200);
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $query = "select * from amigoGijon;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 $data = "";
 
if (mysqli_num_rows($result)==0) { 
$data = "Todavia no se han añadido nidos";
http_response_code(200);
 }else{
	 
 
while ($row = mysqli_fetch_array($result)) {
			$data = $data . "*".$row['Nombre']."* - `". $row['Codigo']."`"."\n";

    }
 }
	
	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
			'parse_mode' => 'Markdown',
    		'text' => $data
    		]);
			 http_response_code(200);
	}
	}
	
	
	#####GIJON2#####
	
	else if($update->message->chat->id === -1001063849412 ){
		
		
		if(substr($update->message->text, 0, 9) === "/addamigo")
    {
		//http_response_code(200);
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $pokestop = explode(' ', $update->message->text);
 $data = $trainer;
 unset($data[0]);
 unset($data[1]);
 $finalData = implode(" ", $data);
 
 $query = "insert into amigoGijon (Nombre,Codigo) values ('$trainer[1]','$finalData')";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Codigo de amigo confirmado!"
    		]);
			 http_response_code(200);
	}
	
	
	
	else if(substr($update->message->text, 0, 7) === "/amigos")
    {
		//http_response_code(200);
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $query = "select * from amigoGijon;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 $data = "";
 
if (mysqli_num_rows($result)==0) { 
$data = "Todavia no se han añadido nidos";
http_response_code(200);
 }else{
	 
 
while ($row = mysqli_fetch_array($result)) {
			$data = $data . "*".$row['Nombre']."* - `". $row['Codigo']."`"."\n";

    }
 }
	
	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
			'parse_mode' => 'Markdown',
    		'text' => $data
    		]);
			 http_response_code(200);
	}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	#####AVILES#####
	
	else if($update->message->chat->id === -1001357891209){
		
		
		if(substr($update->message->text, 0, 9) === "/addamigo")
    {
		//http_response_code(200);
		
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $pokestop = explode(' ', $update->message->text);
 $data = $trainer;
 unset($data[0]);
 unset($data[1]);
 $finalData = implode(" ", $data);
 
 $query = "insert into amigoAviles (Nombre,Codigo) values ('$trainer[1]','$finalData')";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => "Codigo de amigo confirmado!"
    		]);
			 http_response_code(200);
	}
	
	
	
	else if(substr($update->message->text, 0, 7) === "/amigos")
    {
		//http_response_code(200);
		
		 //connecting to database and getting the connection object
//database constants
 define('DB_HOST', 'den1.mysql2.gear.host');
 define('DB_USER', 'pmgmisiones');
 define('DB_PASS', "Mw78_Gz8-CJs");
 define('DB_NAME', 'PMGMisiones');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 //$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => ERROR
    		]);
 die();
 http_response_code(200);
 }
 
 
 $trainer = explode(" ", $update->message->text);
 $query = "select * from amigoAviles;";
 //executing the query 
 mysqli_query($conn, $query) or die('Error querying database.');
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 $data = "";
 
if (mysqli_num_rows($result)==0) { 
$data = "Todavia no se han añadido nidos";
http_response_code(200);
 }else{
	 
 
while ($row = mysqli_fetch_array($result)) {
			$data = $data . "*".$row['Nombre']."* - `". $row['Codigo']."`"."\n";

    }
 }
	
	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
			'parse_mode' => 'Markdown',
    		'text' => $data
    		]);
			 http_response_code(200);
	}
	} ###FIN AVILES#####
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/*
	else if($update->message->new_chat_member != null){
		$nombre = $update->message->new_chat_member->first_name
		$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
			'parse_mode' => 'Markdown',
    		'text' => "Bienvenido/a" . $nombre . "!"
    		]);
			 http_response_code(200);
	} */
	
	
		

   else{
	   http_response_code(200);
	   }
} catch (\Zelenin\Telegram\Bot\NotOkException $e) {
	http_response_code(200);
    //echo error message ot log it
    echo $e->getMessage();
	//$response = $client->sendChatAction(['chat_id' => $update->message->chat->id, 'action' => 'typing']);

    	/*$response = $client->sendMessage([
    		'chat_id' => $update->message->chat->id,
    		'text' => $e
    		]);*/
			http_response_code(200);
}