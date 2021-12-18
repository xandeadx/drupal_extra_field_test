<?php

namespace Drupal\extra_plugin_settings\Plugin\ExtraField\Display;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\extra_field_plus\Plugin\ExtraFieldPlusDisplayBase;

/**
 * Example Extra field Display.
 *
 * @ExtraFieldDisplay(
 *   id = "extra17",
 *   label = "Extra 17",
 *   description = "Extra 17",
 *   bundles = {
 *     "node.page",
 *   },
 * )
 */

class Extra17 extends ExtraFieldPlusDisplayBase {

  /**
   * {@inheritDoc}
   */
  public function view(ContentEntityInterface $entity): array {
    return ['#markup' => 'Extra 17'];
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(): array {
    $form = parent::settingsForm();

    $form['setting1'] = [
      '#type' => 'textfield',
      '#title' => 'Setting 1',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function defaultFormValues(): array {
    $values = parent::defaultFormValues();

    $values += [
      'setting1' => '',
    ];

    return $values;
  }

}
