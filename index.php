<?php

// Welcome to the Podcast feed. 
// This file simply loads the latest XML from the DNBArena_Podcast.xml.
// This allows the podcast URL to be podcast.breakbeat.co.uk.

header("Cache-control: private, no-cache");
header("Expires: Mon, 26 Jun 1997 05:00:00 GMT");
header("Pragma: no-cache");

header("Content-Type:text/xml");// Specify it's XML

//Local fall back...
//readfile('DNBArena_Podcast123.xml');

//New call /update system...
include_once("feed.php");

?>