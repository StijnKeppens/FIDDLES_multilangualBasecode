<?php
  session_start();
 
  //Define Language file paths
  define("LANG_DE_PATH", $_SERVER['DOCUMENT_ROOT'] . '/include/lang/de/');
  define("LANG_EN_PATH", $_SERVER['DOCUMENT_ROOT'] . '/include/lang/en/');
 
 
  if (isset($_GET['lang'])) {
     
    // GET request found
 
    if ($_GET['lang'] == 'de') {
       
      // asked for the language 'de' so include the 'de.php' file
      include LANG_DE_PATH . '/de.php';
      $_SESSION['lang'] = 'de';
    } else {
 
      // if not asked for 'de', include 'en.php' as default
      include LANG_EN_PATH . '/en.php';
      $_SESSION['lang'] = 'en';
    }
  } else if (isset($_SESSION['lang'])) {
 
    //SESSION variable found
 
    if ($_SESSION['lang'] == 'de') {
 
      // language already set to 'de', so include 'de.php'
      include LANG_DE_PATH . '/de.php';
    } else {
 
      // SESSION variable not set to 'de', so include 'en.php' by default
      include LANG_EN_PATH . '/en.php';
    }
  } else {
     
    // SESSION varibale not set, so set it to 'en' and include 'en.php' by default
    include LANG_EN_PATH . 'en.php';
    $_SESSION['lang'] = 'en';
  }
?>
<html>
  <head>
    <title><?php echo $LANG['title']; ?></title>
  </head>
  <body>
    <h1><?php echo $LANG['header'];?><h1>
    <h2>abc@nomail.com</h2>
  </body>
</html>
