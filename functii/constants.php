<?php

  //Site adress
	define('__ADDRESS__', 'localhost');
    
  //Regions dictionary address
   define('__REGIONS__', 'regions.php'); 
  
  //Users data base
  define('__USERSDB__', 'database'.DIRECTORY_SEPARATOR.'users_db'.DIRECTORY_SEPARATOR.'users_db.php');
  
  //Session names, the defaul session name is PHPSSESID
  define('__SESSIONNAME__', 'PHPSESSID');
  
  // Content database constants
  
  //Top wiew database
  define('__TOPW__', 'database'.DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'top_w'.DIRECTORY_SEPARATOR.'top_w.php');
  
  // Top new database
  define('__TOPN__', 'database'.DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'top_n'.DIRECTORY_SEPARATOR.'top_n.php');
  
  // Categories database
  //define('__CATEGORIES__', 'database'.DIRECTORY_SEPARATOR.'content'.DORECTORY_SEPARATOR.'categories'.DIRECTORY_SEPARATOR.'categories.php');
  
  //Main content database
  define('__MAINDB__', 'database'.DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'main_content'.DIRECTORY_SEPARATOR.'main_content.php');
  
  //Comments database
  define('__COMMENTSDB__', 'database'.DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'comments'.DIRECTORY_SEPARATOR.'comments.php');

  //Defaul users avatar location for male users
  define('__AVATARMALE__', 'database'.DIRECTORY_SEPARATOR.'users_db'.DIRECTORY_SEPARATOR.'users_photos'.DIRECTORY_SEPARATOR.'user_m.png');
  
  // Defaul avatr location for female users
  define('__AVATARFEMALE__', 'database'.DIRECTORY_SEPARATOR.'users_db'.DIRECTORY_SEPARATOR.'users_photos'.DIRECTORY_SEPARATOR.'user_f.png');
    
  //Theme  
	define('__THEME__','style\default_style\style4.css');
  
  //Locatia acestui fisier
  define('CONSTANTS_ADDRESS', 'functii'.DIRECTORY_SEPARATOR.'constants.php');
  
 
  // LOcatia dictionarului cu locatiile fiecarei theme
  define('__THEMEDB__','style'.DIRECTORY_SEPARATOR.'default_style'.DIRECTORY_SEPARATOR.'theme.php');