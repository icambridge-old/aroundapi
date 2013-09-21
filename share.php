<?php

include_once('simple_html_dom.php');



function scraping($url) {

    $html = file_get_html($url);
    $time = (string) $html->find('tr[class="firstRow"] td',0 )->innertext.PHP_EOL;

    $status = (string) $html->find('tr[class="firstRow"] td[class="status"]',0 )->innertext.PHP_EOL;

    return compact("time", "status");	

}



