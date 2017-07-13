<?php

namespace Drupal\itg_admin_quote;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a Contact entity.
 *
 * We have this interface so we can join the other interfaces it extends.
 *
 * @ingroup itg_admin_quote
 */
interface QuoteInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
