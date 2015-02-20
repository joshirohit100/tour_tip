<?php

/**
* @file
* Contains \Drupal\rohit_tour\Plugin\tour\tip\TipPluginCustom.
*/
namespace Drupal\rohit_tour\Plugin\tour\tip;

use Drupal\tour\TipPluginBase;

/**
 * Displays some text as a tip.
 *
 * @Tip(
 *   id = "custom",
 *   title = @Translation("CUstom")
 * )
 */
class TipPluginCustom extends TipPluginBase {
  protected $my_id;

  /**
   * {@inheritdoc}
   */
  public function getOutput() {
    $output = 'My Custom tip id => ' . $this->my_id;
    return array('#markup' => $output);
  }

}
