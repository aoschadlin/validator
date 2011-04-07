<?php
class PricingController
{
  static public function display()
  {
    $params = array();
    $params['body'] = 'pricing.php';
    $params['title'] = 'Pricing page';
    $params['message'] = 'Price is $25/project/month';

    getTemplate()->display('baseplate.php', $params);
  }
}
?>
