<?php

namespace Drupal\alps_base\Entity;

use Drupal\alps_base\BannerBlockInterface;
use Drupal\block_content\Entity\BlockContent;

/**
 * A custom block entity class.
 */
class BannerBlock extends BlockContent implements BannerBlockInterface {

  /**
   * {@inheritdoc}
   */
  public function getLink(): string {
    return $this->get('field_link')->first()->getUrl()->toString();
  }

  /**
   * {@inheritdoc}
   */
  public function getTitle(): string {
    return $this->get('field_link')->first()->get('title')->getValue();
  }

  /**
   * {@inheritdoc}
   */
  public function getImage(): string {
    return $this->get('field_image')->entity->get('field_media_image')->entity->getFileUri();
  }

  /**
   * {@inheritdoc}
   */
  public function getCta(): string {
    return $this->get('field_cta')->first()->get('value')->getValue();
  }

}
