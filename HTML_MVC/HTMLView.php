
<?php

//
//Laura Seletos 
//Create an HTML View Class
//

	class HTMLView
	{
		//Variables for header
			//string
			protected $title;
			//array of strings
			protected $metadata;
			//string
			protected $doctype;
			//string of arrays
			protected $scripts;
			//string of arrays
			protected $stylesheets;
		
		//Variable for body
			protected $bodyTitle;
			protected $fp;
			protected $hangmanWordsArray;
			protected $hangmanFileName;
		
		function __construct() 
		{
			//Variables for header
			 $this->$title = '';
			 $this->$metadata = array();
			 $this->$doctype = '';
			 $this->$scripts = array();
			 $this->$stylesheets = array();

			//Variable for body
			 $this->$bodyTitle = '';
			 $this->$fp = '';
			 $this->$hangmanWordsArray = array();
			 $this->$hangmanFileName = 'hangmanwords.txt';
	    }
	
	
		public function header()
   		{
	      	 $title = 'Hangman  (By Laura Seletos)';
	
			 $metadata = '<meta name="keywords" content="Laura, Seletos, Hangman, Game, Php, Html">
								 <meta name="description" content="Hangman Game">
								 <meta name="author" content="Laura Seletos">';
								
			print(
			$this->$doctype.
			"<html>
			<title>".$this->$title."</title>");
			
			foreeach($this->$stylesheet as $stylesheet)
			{
				print(" ".$this->$stylesheets." ");
			}
			
		}	
		
		public function body($bodyTitle, $hangmanFileName)
	   	{
			$bodyTitle = '<center><br><font size="7">HANGMAN</font></p></center>';
			
			$fp = @fopen($hangmanFileName, 'r'); 

			if ($fp) 
			{
			   $hangmanWordsArray = explode("\n", fread($fp, filesize($hangmanFileName)));
			}
			
		}
		
		public function print()
	   	{
			//Header
	      	header();
		
			//Body
			body();	
	      		
		}
		
		


	}




?>