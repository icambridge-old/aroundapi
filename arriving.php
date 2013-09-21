<?php

include_once('share.php');

$output = scraping('http://ojp.nationalrail.co.uk/service/ldbboard/arr/EDY/MAN/From');

echo json_encode($output);
