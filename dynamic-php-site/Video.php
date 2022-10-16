<?php
interface Video{
    public function setSorce($link);
    public function setName($txt);
    public function getHtmlCode();
    
}

class ViodeFrame implements Video(){
    $source = '';
    $name = ''; 
    public function setSorce($link){
        $source = $link;
    }
    public function setName($txt){
        $name = $txt;
    }
    public function getHtmlCode(){
        return '<iframe class="video" width="200" height="200" src="' . $source . '"></iframe>' . '\\n' .
        '<p class="name">' . $name . '</p>';
    }
}
?>