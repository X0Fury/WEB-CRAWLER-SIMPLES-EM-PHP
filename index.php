<?php
function crawlpaginarkkkkk($url,$naosei=2)
{

       if ($naosei>0)
       {
           $conteudodapag - file_get_contents($url)
           preg_match_all('~<a.*?href="(.*?)".*?>~', $conteudopag,$matches)
           foreach($matches[1] as $novaurl)
       {
           crawl_page($novaurl,$naosei-1);
       }  
       // CASO QUEIRA ADICIONAR O HTML EM UM ARQUIVO -> file_put_contents('arquivoaqui', "\n\n".$conteudodapag."\n\n",FILE_APPEND);
    } 
}
crawlpaginar('https://www.tracoactual.com/',2)
