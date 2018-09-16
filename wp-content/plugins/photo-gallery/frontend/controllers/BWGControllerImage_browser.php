<?php
class BWGControllerImage_browser {

  public function __construct() {
  }

  public function execute($params = array(), $from_shortcode = 0, $bwg = 0) {
    $this->display($params, $from_shortcode, $bwg);
  }

  public function display($params = array(), $from_shortcode = 0, $bwg = 0) {
    require_once BWG()->plugin_dir . "/frontend/views/BWGViewImage_browser.php";
    $view = new BWGViewImage_browser();

    $view->display($params, $from_shortcode, $bwg);
  }
}