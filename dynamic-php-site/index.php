<?php
//Tobias Nahler und Dion Himmering Index.php

//Imports 
require 'Video.php';

$yt1 = new Youtube('https://www.youtube.com/embed/aOIPt1TQXZA' , 'Kumalala');

$vimeo1 = new Vimeo('https://player.vimeo.com/video/758721685?h=e77d940887&color=ffffff', 'Darkeyes');
//define html
echo '<!DOCTYPE html>';
echo '<html lang="ger">';

//Head

echo '<head>';
echo '<meta charset="UTF-8" />';
echo '<link rel="stylesheet" href="./style.css" />';
echo '<title>Bootube Presite</title>';
echo '</head>'; 

// body 

echo '<body>';
echo '<header>';
echo '<img src="./assets/logo1_dev.PNG" alt="logo" class="logo" />';
echo '<h1>BooTube</h1>';
echo '</header>';
echo '';
echo '<hr color="black" />';
echo '';

// Video section
echo '<section>';
echo $yt1 -> getHtmlCode();
echo $vimeo1 -> getHtmlCode();
echo $yt1 -> getHtmlCode();
echo $yt1 -> getHtmlCode();
echo $vimeo1 -> getHtmlCode();
echo $yt1 -> getHtmlCode();
echo $yt1 -> getHtmlCode();
echo $vimeo1 -> getHtmlCode();
echo $yt1 -> getHtmlCode();
echo $yt1 -> getHtmlCode();
echo $vimeo1 -> getHtmlCode();
echo $yt1 -> getHtmlCode();
echo $yt1 -> getHtmlCode();
echo $vimeo1 -> getHtmlCode();
echo $yt1 -> getHtmlCode();
echo $yt1 -> getHtmlCode();
echo $vimeo1 -> getHtmlCode();
echo $yt1 -> getHtmlCode();
echo $yt1 -> getHtmlCode();
echo $vimeo1 -> getHtmlCode();
echo $yt1 -> getHtmlCode();
echo '</section>';

//Footer
echo '';
echo '<footer></footer>';

//end tags
echo '</body>';
echo '</html>';
echo '';
?>