<?php
function crawlpaginar($url) {
       $html_da_pag = file_get_contets($url);
       preg_match('<a href=', $html_da_pag, $matches, PREG_OFFSET_CAPTURE);
       print_r($matches);
}

crawlpaginar('https://www.github.com');
