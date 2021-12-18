<?php

namespace Drupal\extra_plugin\Plugin\ExtraField\Display;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\extra_field\Plugin\ExtraFieldDisplayBase;

/**
 * Example Extra field Display.
 *
 * @ExtraFieldDisplay(
 *   id = "extra18",
 *   label = "Extra 18",
 *   description = "Extra 18",
 *   bundles = {
 *     "node.page",
 *   },
 * )
 */

class Extra18 extends ExtraFieldDisplayBase {

  /**
   * {@inheritDoc}
   */
  public function view(ContentEntityInterface $entity): array {
    return ['#markup' => 'Extra 18'];
  }

}
