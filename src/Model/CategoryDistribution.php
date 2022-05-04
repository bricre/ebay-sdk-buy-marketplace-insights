<?php

namespace Ebay\Buy\Marketplace\Insights\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The container that defines the fields for the category refinements. This
 * container is returned when <b> fieldgroups</b> is set to
 * <code>CATEGORY_REFINEMENTS</code> or <code>FULL</code> in the request.
 */
class CategoryDistribution extends AbstractModel
{
    /**
     * The identifier of the category.
     *
     * @var string
     */
    public $categoryId = null;

    /**
     * The name of the category, such as Baby & Toddler Clothing.
     *
     * @var string
     */
    public $categoryName = null;

    /**
     * The number of items in this category.
     *
     * @var int
     */
    public $matchCount = null;

    /**
     * The HATEOAS reference of this category.
     *
     * @var string
     */
    public $refinementHref = null;
}
