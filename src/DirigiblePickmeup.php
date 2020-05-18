<?php

class DirigiblePickmeup {
  public $path = "";
  public $dir = "";
  public $templates = "";
  function __construct($args) {
    $this->path = $args;
    $this->dir = plugin_dir_path($args); 
    $this->templates = "{$this->dir}src/templates";
    add_action( 'wp_enqueue_scripts',  [ &$this, 'registerScripts' ] );
  }

  public function registerScripts() {
    wp_register_script( 'dirigible-pickmeup-js', plugins_url('dirigible-pickmeup/js/dirigible-pickmeup.js'), ['jquery'], NULL, true);
    wp_enqueue_script('dirigible-pickmeup-js');  
  }
}

?>