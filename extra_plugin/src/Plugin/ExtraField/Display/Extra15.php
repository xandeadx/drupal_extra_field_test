<?php

namespace Drupal\extra_plugin\Plugin\ExtraField\Display;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\extra_field\Plugin\ExtraFieldDisplayBase;

/**
 * Example Extra field Display.
 *
 * @ExtraFieldDisplay(
 *   id = "extra15",
 *   label = "Extra 15",
 *   description = "Extra 15",
 *   bundles = {
 *     "node.page",
 *   },
 * )
 */

class Extra15 extends ExtraFieldDisplayBase {

  /**
   * {@inheritDoc}
   */
  public function view(ContentEntityInterface $entity): array {
    return ['#markup' => 'Extra 15'];
  }

}
