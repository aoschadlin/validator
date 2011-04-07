<?php
class ContactController
{
  static public function display()
  {
    $params = array();
    $params['body'] = 'contact.php';
    $params['title'] = 'Contact page';
    $params['message'] = 'Email address and mailing address';

    getTemplate()->display('baseplate.php', $params);
  }
}
?>
