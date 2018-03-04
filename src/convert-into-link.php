<?php
class ConvertIntoLink{
	
	public function Convert($string){
		
		//regrex to match pattern 
		$regex = "/#+([a-zA-Z0-9_]+)/";
		
		// preg_replace to covert hashtag into link
		$converted_string = preg_replace($regex, '<a href="display-hashtag.php?tag=$1">$0</a>', $string);
		
		//return converted hashtag link
		return $converted_string;
		
	}
	
}
?>