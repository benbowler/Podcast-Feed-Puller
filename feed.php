<?php

header("Cache-control: private, no-cache");
header("Expires: Mon, 26 Jun 1997 05:00:00 GMT");
header("Pragma: no-cache");

$feed = file_get_contents("update/feed.xml");
$feed = str_replace('podcastfeedtoreplace', 'thisurl', $feed);

echo $feed;

?>