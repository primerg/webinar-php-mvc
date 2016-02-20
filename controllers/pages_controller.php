<?php
  require_once('models/post.php');

  class PagesController {
    public function home() {
      $posts = Post::all();
      
      $first_name = 'Jon';
      $last_name  = 'Snow';

      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }