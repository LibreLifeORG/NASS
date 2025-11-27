<?php
	// Title.

        $content = file_get_contents('website.conf');
        preg_match('/Title="([^"]+)"/', $content, $title);

	// Url.

        $content = file_get_contents('website.conf');
        preg_match('/Url="([^"]+)"/', $content, $url);

	// Year.

        $content = file_get_contents('website.conf');
        preg_match('/Year="([^"]+)"/', $content, $year);

	// Creator.

        $content = file_get_contents('website.conf');
        preg_match('/Creator="([^"]+)"/', $content, $creator);
?>

<hr>
<footer>
    <p>
    <a href="<?php echo $url[1];?>"><?php echo $title[1];?></a> © <?php echo $year[1]; ?> - <?php echo date("Y"); ?> by <?php echo "$creator[1]."; ?> </a>
   </p>
</footer>
</div>
</html>
