<?php
//Filename: "JSONCONVERSIE.CLASS.PHP"

//GENERIEK //CONTEXTONAFHANKELIJK //UITWISSELBAAR
//ALGEMENE OMSCHRIJVING VAN EEN OBJECT
//CLASS NIET UITVOERBAAR // 
//ALLEEN AAN TE ROEPEN == OBJECT == WEL SPECIFIEK
 
class JsonConversie 
{
	//eigenschappen
	public $url = ""; 								//bijv: imdb.com
	private $input = ""; 							//bijv: titel van de film
	private $data = ""; 							//bijv: array van alle IMDB info
	
	//constructor
	function __construct($input)
	{
		$this->input = $input;						//Heeft de API een specifieke eerste input nodig?
													//zoniet, dan een lege string ""
	}
	
	//methodes/functies
	function setAPIUrl($url)						//imdb.com, facebook.com, maps.google.com etc.
	{
		$this->url = $url;
	}		
	
	function Conversie()
	{		
		$json = file_get_contents($this->url ."". $this->input);//Haal API data op in een JSON format

		return $this->data = json_decode($json,true); 		//Converteer van JSON format naar PHP array
	}
	
	function getInfo($whichInfo)
	{
		return $this->data[$whichInfo];				//Welke info uit de zojuist gevulde array wil je?
	}
}
?>
<!-- ______                               _ 
    (_____ \         copyright           (_)
     _____) )  ___   _____  ____   _____  _ 
    |  ____/  / _ \ | ___ ||  _ \ (____ || |
    | |      | |_| || ____|| | | |/ ___ || |
    |_|       \___/ |_____)|_| |_|\_____||_|
-->