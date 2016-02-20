<?php
  class AboutController {
    public function index() {
      $first_name = 'Jon';
      $last_name  = 'Snow';

      require_once('views/about/index.php');
    }
  }