<?php
include('JsonConversie.class.php');

class Watchlist
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
	function __construct($imdbID)
	{
		$this->imdbID = $imdbID;

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




	public function setMovieProperties()
	{

		$jsonconversie = new JsonConversie($this->imdbID);
		$jsonconversie->setAPIUrl("http://www.omdbapi.com/?apikey=186be766&i=");

		$jsonconversie->Conversie();

		$this->title = $jsonconversie->getInfo("Title");
		$this->year = $jsonconversie->getInfo("Year");
		$this->imdbID = $jsonconversie->getInfo("imdbID");
		$this->poster = $jsonconversie->getInfo("Poster");
		$this->Released = $jsonconversie->getInfo("Released");
		$this->genre = $jsonconversie->getInfo("Genre");



	}
}

?>
