
<?php
class WatchlistHelper
{
    private static $imdbID = '';


    public static function ReplaceTitle($imdbID)
    {


		$replaceChars = array(' ');
		self::$imdbID = str_replace($replaceChars , '_', $imdbID);
		return self::$imdbID;
    }
}
?>
