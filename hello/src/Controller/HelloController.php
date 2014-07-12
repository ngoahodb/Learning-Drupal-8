<?php

/**
 * @file
 * Contains \Drupal\contact\Controller\ContactController.
 */

namespace Drupal\hello\Controller;

/**
 * Controller routines for contact routes.
 */
class HelloController {

  public function helloPage() {

    return 'Drupal 8 traing';
  }
  public function sayhelloPage($name) {

    return 'Hello ' . $name .', welcome to Drupal 8.';
  }
}
