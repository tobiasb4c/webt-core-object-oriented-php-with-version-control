<?php
interface Iframe {
    public function getHtmlCode();
    
}

abstract class Video implements Iframe{
    public $source;
    public $name; 

    function __construct($source, $name) {
        $this->source = $source;
        $this->name = $name;
    }

    public abstract function getHtmlCode();
}

class Youtube extends Video{
    function __construct($source, $name) {
        parent::__construct($source, $name);
    }

    public function getHtmlCode(){
        return '<iframe class="video" width="200" height="200" src="' . $source . '"></iframe>';
    }
}

?>