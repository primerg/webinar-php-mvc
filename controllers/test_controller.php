<?php
  require_once('models/post.php');

  class TestController {
    public function index() {

      $posts = Post::all();

      require_once('views/test/index.php');
    }
  }