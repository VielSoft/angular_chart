<?php

namespace Drupal\angular_chart\Plugin\Block;

use Drupal\Core\Block\BlockBase;
/**
 * Render Line Chart block
 *
 * @Block(
 *   id = "angular_chart_block",
 *   admin_label = @Translation("Line Chart"),
 *   category = @Translation("Blocks")
 * )
 */
class AngularChartBlock extends BlockBase {

  public function build() {
    return array(
      '#theme' => 'angular_chart',
    );
  }
}
