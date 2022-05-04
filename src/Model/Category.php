<?php

namespace Ebay\Buy\Marketplace\Insights\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used by the <b> categories</b>  container in the response of the
 * <b> search</b>  method, and contains the primary item category ID of the item,
 * as well as the secondary item category if the item was listed in two categories.
 */
class Category extends AbstractModel
{
    /**
     * The unique identifier of the primary item category of the item, as well as the
     * secondary item category if item was listed in two categories.
     *
     * @var string
     */
    public $categoryId = null;
}
