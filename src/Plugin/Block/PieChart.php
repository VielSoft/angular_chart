<?php

namespace Drupal\angular_chart\Plugin\Block;

use Drupal\Core\Block\BlockBase;
/**
 * Render Pie Chart block.
 *
 * @Block(
 *   id = "pie_chart_block",
 *   admin_label = @Translation("Pie Chart"),
 *   category = @Translation("Blocks")
 * )
 */
class PieChart extends BlockBase {

  public function build() {
    return array(
      '#theme' => 'pie_chart',
    );
  }
}
