<?php
  session_start();
 
  //Define Language file paths
  define("LANG_DE_PATH", $_SERVER['DOCUMENT_ROOT'] . '/include/lang/de/');
  define("LANG_EN_PATH", $_SERVER['DOCUMENT_ROOT'] . '/include/lang/en/');
 
 
  if (isset($_GET['lang'])) {
     
    // GET request found
 
    if ($_GET['lang'] == 'fr') {
       
      // asked for the language 'de' so include the 'de.php' file
      include LANG_FR_PATH . 'fr.php';
      echo LANG_FR_PATH . 'fr.php';
      $_SESSION['lang'] = 'fr';
    } else {
 
      // if not asked for 'de', include 'en.php' as default
      include LANG_NL_PATH . 'nl.php';
      $_SESSION['lang'] = 'nl';
    }
  } elseif (isset($_SESSION['lang'])) {
 
    //SESSION variable found
 
    if ($_SESSION['lang'] == 'fr') {
 
      // language already set to 'de', so include 'de.php'
      include LANG_FR_PATH . 'fr.php';
    } else {
 
      // SESSION variable not set to 'de', so include 'en.php' by default
      include LANG_NL_PATH . 'nl.php';
    }
  } else {
     
    // SESSION varibale not set, so set it to 'en' and include 'en.php' by default
    include LANG_EN_PATH . 'nl.php';
    $_SESSION['lang'] = 'nl';
  }
?>

<html>
  <head>
    <title><?php echo $LANG['title']; ?></title>
  </head>
  <body>
      <?php echo $_SESSION['lang']; ?>
    <h1><?php echo $LANG['header'];?><h1>
    <h2>abc@nomail.com</h2>
  </body>
</html>
