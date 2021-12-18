<?php

namespace Drupal\extra_plugin_settings\Plugin\ExtraField\Display;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\extra_field_plus\Plugin\ExtraFieldPlusDisplayBase;

/**
 * Example Extra field Display.
 *
 * @ExtraFieldDisplay(
 *   id = "extra13",
 *   label = "Extra 13",
 *   description = "Extra 13",
 *   bundles = {
 *     "node.page",
 *   },
 * )
 */

class Extra13 extends ExtraFieldPlusDisplayBase {

  /**
   * {@inheritDoc}
   */
  public function view(ContentEntityInterface $entity): array {
    return ['#markup' => 'Extra 13'];
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
