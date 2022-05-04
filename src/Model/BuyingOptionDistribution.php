<?php

namespace Ebay\Buy\Marketplace\Insights\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The container that defines the fields for the buying options refinements. This
 * container is returned when <b> fieldgroups</b> is set to
 * <code>BUYING_OPTION_REFINEMENTS</code> or <code>FULL</code> in the request.
 */
class BuyingOptionDistribution extends AbstractModel
{
    /**
     * @var string
     */
    public $buyingOption = null;

    /**
     * The number of items having this buying option.
     *
     * @var int
     */
    public $matchCount = null;

    /**
     * The HATEOAS reference for this buying option.
     *
     * @var string
     */
    public $refinementHref = null;
}
