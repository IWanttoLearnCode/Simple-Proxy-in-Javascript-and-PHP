<html>
  <?php
    $url = $_GET['url'];
    $page = file($url);
    foreach($page as $part)
    {
    	echo $part;
    }
    ?>

</html>
