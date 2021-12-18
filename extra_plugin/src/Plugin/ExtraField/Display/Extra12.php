<?php

namespace Drupal\extra_plugin\Plugin\ExtraField\Display;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\extra_field\Plugin\ExtraFieldDisplayBase;

/**
 * Example Extra field Display.
 *
 * @ExtraFieldDisplay(
 *   id = "extra12",
 *   label = "Extra 12",
 *   description = "Extra 12",
 *   bundles = {
 *     "node.page",
 *   },
 * )
 */

class Extra12 extends ExtraFieldDisplayBase {

  /**
   * {@inheritDoc}
   */
  public function view(ContentEntityInterface $entity): array {
    return ['#markup' => 'Extra 12'];
  }

}
