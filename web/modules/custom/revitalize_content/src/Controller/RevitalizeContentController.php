<?php

declare(strict_types=1);

namespace Drupal\revitalize_content\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Revitalize Content routes.
 */
final class RevitalizeContentController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function __invoke(): array {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => '<div id="root"></div>',
    ];
    $build['#attached']['library'][] = 'revitalize/puck_editor';

    return $build;
  }

}
