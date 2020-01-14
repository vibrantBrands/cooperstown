<?php
use Concrete\Core\Page\Theme\Theme as Theme;
use Concrete\Core\View\View as View;

class PageOptions {
    private $page;
    private $img_folder_name;
    private $theme_dir;
    private $img_path;
    
    function __construct() {
        $this->img_folder = "/images";
        $this->theme_dir = dirname(__DIR__ . '\..');
        
        $this->img_path = strstr($this->theme_dir . $this->img_folder, "/application/");
        
        $this->page = \Page::getCurrentPage();
    }
    
    public function getPageName() {
        return $this->page->getCollectionName();
    }
    
    public function getPageID() {
        return $this->page->getCollectionID();
    }
    
    public function isHome() {
        $page_id = $this->getPageID();
        
        if ($page_id == 1) {
            return true;
        }
        
        return false;
    }
    public function addArea($area_name) {
        $a = new Area($area_name);
        $a->display($c);
    }
    
    public function addGlobalArea($area_name) {
        $a = new GlobalArea($area_name);
        $a->display();
    }
    
    public function addImg($img_src, $alt = "Image", $link = 0, $class = "img") {
        $img_tag;
        $src;
        
        $src = $img_src;
        
        if (!$link) {
            $img_tag = "<img class='$class' src='$this->img_path/$img_src' alt='$alt'>";
        }
        else {
            $img_tag = "<a href='$link'><img class='$class' src='$this->img_path/$img_src' alt='$alt'></a>";
        }
        
        return $img_tag;
    }
    
    public function areaIsEmpty($area, $page) {
        echo ($area->getBlocksInArea());
    }
}

?>
