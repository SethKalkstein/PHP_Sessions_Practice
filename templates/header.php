<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>simple sessions practice</title>
  </head>
  <body>
    <nav>
      <ul id="navbar">
        <li> <a href="index.php">Page 1</a> </li>
        <li> <a href="page2.php">Page 2</a> </li>
        <li> <a href="page3.php">Page 3</a> </li>
        <li> <a href="page4.php">Page 4</a> </li>
      </ul>
    </nav>
    <h1>Practice for sessions</h1>
    <h2>You are currently on</h2>
    <?php
      //get the path string of the current file from the server
      $file_path = $_SERVER['PHP_SELF'];
      //find the position of the last forward slash before the file name currently being run, assuming it is a PHP file
      $slash_before_filename = strpos($file_path,"/",-strpos($file_path,".php"));
      //convert file name to the way it is written in the html a tags above
      $html_file_name = substr($file_path, $slash_before_filename+1, strlen($file_path));
      //pull up contents of this file
      $file_contents = file_get_contents("templates/header.php");
      //find start position of the navbar in this file using the ul's unique id
      $start_pos = strpos($file_contents,'id="navbar"');
      //find closing position of the navbar
      $end_pos = strpos($file_contents,"</ul>", $start_pos);
      //isolate the relevant information inside the navbar ul tags
      $nav_list = substr($file_contents,$start_pos,$end_pos-$start_pos);
      //find the the start position of the link text, always 2 positions after the end of the file name because ">
      $start_page_name = strpos($nav_list, $html_file_name)+strlen($html_file_name)+2;
      //find end position of link text, always the closing anchor tag
      $end_page_name = strpos($nav_list, "</a>", $start_page_name);
      //isolate the the link text
      $current_page_name = substr($nav_list, $start_page_name, $end_page_name - $start_page_name);
    ?>
    <h2><?php echo $current_page_name ?></h2>
