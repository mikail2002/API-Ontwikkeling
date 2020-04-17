<?php
include('JsonConversie.class.php');

class Movie
{
	//eigenschappen
	private $title = "";
	private $year = "";
	private $imdbID = "";
	private $poster = "";
	private $Released = "";
	private $genre = "";

	//ngo 20 properties

	//constuctor
	function __construct($title)
	{
		$this->title = $title; //Bad_boys
		//echo'TEST: Het object is aangemaakt';
	}

	//methodes
	public function Title()
	{
		return $this->title;
	}

	public function Year()
	{
		return $this->year;
	}

	public function Poster()
	{
		return $this->poster;
	}

	public function ImdbID()
	{
		return $this->imdbID;
	}

	public function Released()
	{
		return $this->Released;
	}

	public function Genre()
	{
		return $this->genre;
	}




	public function setMovieProperties() //setInfo()
	{
		//hier kroep je de Json class aan om de eigenschappen van de film te vullen
		$jsonconversie = new JsonConversie($this->title); //TITEL wordt niet opgehaald, maar ingevuld door de gebruiker obv titel halen we de rest op dmv de API
		$jsonconversie->setAPIUrl("http://www.omdbapi.com/?apikey=186be766&t="); //JSON URL

		$jsonconversie->Conversie();

		//TODO: dit moet GENERIEK, doorloop de properties en doorloop de array, kijk op overeenkomsten
		$this->year = $jsonconversie->getInfo("Year");
		$this->imdbID = $jsonconversie->getInfo("imdbID");
		$this->poster = $jsonconversie->getInfo("Poster");
		$this->Released = $jsonconversie->getInfo("Released");
		$this->genre = $jsonconversie->getInfo("Genre");



	}
}

?>
