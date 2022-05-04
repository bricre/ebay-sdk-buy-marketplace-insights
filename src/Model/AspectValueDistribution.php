<?php

namespace Ebay\Buy\Marketplace\Insights\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The container that defines the fields for the conditions refinements. This
 * container is returned when <b> fieldgroups</b> is set to
 * <code>ASPECT_REFINEMENTS</code> or <code>FULL</code> in the request.
 */
class AspectValueDistribution extends AbstractModel
{
    /**
     * The value of an aspect. For example, Red is a value for the aspect Color.
     *
     * @var string
     */
    public $localizedAspectValue = null;

    /**
     * The number of items with this aspect.
     *
     * @var int
     */
    public $matchCount = null;

    /**
     * A HATEOAS reference for this aspect.
     *
     * @var string
     */
    public $refinementHref = null;
}
