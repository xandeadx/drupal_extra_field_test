<?php

namespace Drupal\extra_plugin\Plugin\ExtraField\Display;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\extra_field\Plugin\ExtraFieldDisplayBase;

/**
 * Example Extra field Display.
 *
 * @ExtraFieldDisplay(
 *   id = "extra5",
 *   label = "Extra 5",
 *   description = "Extra 5",
 *   bundles = {
 *     "node.page",
 *   },
 * )
 */

class Extra5 extends ExtraFieldDisplayBase {

  /**
   * {@inheritDoc}
   */
  public function view(ContentEntityInterface $entity): array {
    return ['#markup' => 'Extra 5'];
  }

}
