<?php
	$content = file_get_contents('website.conf');
        preg_match('/Title="([^"]+)"/', $content, $title);

	echo "<h2>$title[1]</h2>"
?>
<div class="nav">
<ul>
  <li><a href="/">Home</a> —</li>
  <li><a href="/about/">About me</a> —</li>
  <li><a href="/other/">Other</a> </li>
</ul>
</div>

<hr>
