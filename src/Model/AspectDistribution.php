<?php

namespace Ebay\Buy\Marketplace\Insights\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that define the fields for the aspect information. Aspects are the
 * variations of an item, such as color, size, etc.
 */
class AspectDistribution extends AbstractModel
{
    /**
     * An array of containers for the various values of the aspect and the match count
     * and a HATEOAS reference (<b> refinementHref</b>) for this aspect.
     *
     * @var \Ebay\Buy\Marketplace\Insights\Model\AspectValueDistribution[]
     */
    public $aspectValueDistributions = null;

    /**
     * Name of an aspect, such as Brand, Color, etc.
     *
     * @var string
     */
    public $localizedAspectName = null;
}
