<?php
//Tobias Nahler und Dion Himmering Index.php

//Imports 
require 'Video.php';

//$video1 = new Video('https://www.youtube.com/watch?v=e6BVMv0yHMg' , 'test');

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

// Videos
echo '<section>';
//echo '' . $video1 -> getHtmlCode() . '';
//print($video1 -> getHtmlCode());
echo '<iframe class="video" width="200" height="200"src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>';
echo '<iframe class="video" width="200" height="200"src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>';
echo '<iframe class="video" width="200" height="200"src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>';
echo '<hr color="white" />';
echo '';
echo '<iframe class="video" width="200" height="200"src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>';
echo '<iframe class="video" width="200" height="200"src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>';
echo '';
echo '<iframe class="video" width="200" height="200"src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>';
echo '';
echo '<hr color="white" />';
echo '';
echo '<iframe class="video" width="200" height="200"src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>';
echo '<iframe class="video" width="200" height="200"src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>';
echo '<iframe class="video" width="200" height="200"src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>';
echo '';
echo '<hr color="white" />';
echo '';
echo '';
echo '<iframe class="video" width="200" height="200"src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>';
echo '';
echo '<iframe class="video" width="200" height="200"src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>';
echo '<iframe class="video" width="200" height="200"src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>';
echo '';
echo '<hr color="white" />';
echo '';
echo '';
echo '<iframe class="video" width="200" height="200"src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>';
echo '<iframe class="video" width="200" height="200"src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>';
echo '<iframe class="video" width="200" height="200"src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>';
echo '';
echo '';
echo '<hr color="white" />';
echo '';
echo '';
echo '<iframe class="video" width="200" height="200"src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>';
echo '<iframe class="video" width="200" height="200"src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>';
echo '<iframe class="video" width="200" height="200"src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>';
echo '';
echo '<hr color="white" />';
echo '';
echo '<iframe class="video" width="200" height="200"src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>';
echo '<iframe class="video" width="200" height="200"src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>';
echo '';
echo '<iframe class="video" width="200" height="200"src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>';
echo '</section>';

//Footer
echo '';
echo '<footer></footer>';

//end tags
echo '</body>';
echo '</html>';
echo '';
?>