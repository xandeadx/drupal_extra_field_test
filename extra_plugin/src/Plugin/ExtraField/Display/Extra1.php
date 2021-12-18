<?php

namespace Drupal\extra_plugin\Plugin\ExtraField\Display;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\extra_field\Plugin\ExtraFieldDisplayBase;

/**
 * Example Extra field Display.
 *
 * @ExtraFieldDisplay(
 *   id = "extra1",
 *   label = "Extra 1",
 *   description = "Extra 1",
 *   bundles = {
 *     "node.page",
 *   },
 * )
 */

class Extra1 extends ExtraFieldDisplayBase {

  /**
   * {@inheritDoc}
   */
  public function view(ContentEntityInterface $entity): array {
    return ['#markup' => 'Extra 1'];
  }

}
