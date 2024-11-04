<?php

declare(strict_types=1);

namespace Drupal\revitalize_content\EventSubscriber;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Route subscriber.
 */
final class RevitalizeContentRouteSubscriber extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection): void {
    // @see https://www.drupal.org/node/2187643
    // Change path '/node/edit' to custom controller action.
    // if ($route = $collection->get('entity.node.edit_form')) {
    //   $route->setDefault('_controller', '\Drupal\revitalize_content\Controller\RevitalizeContentController');
    // }
    if ($route = $collection->get('node.add')) {
      $route->setDefault('_controller', '\Drupal\revitalize_content\Controller\RevitalizeContentController');
    }
  }

}
