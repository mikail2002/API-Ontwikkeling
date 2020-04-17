
<?php
class MovieHelper
{
    private static $title = '';


    public static function ReplaceTitle($title)
    {


		$replaceChars = array(' ');
		self::$title = str_replace($replaceChars , '_', $title);
		return self::$title;
    }
}
?>
