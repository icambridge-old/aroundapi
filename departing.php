<?php

include_once('share.php');

$output = scraping('http://ojp.nationalrail.co.uk/service/ldbboard/dep/EDY/MAN/To');

echo json_encode($output);
