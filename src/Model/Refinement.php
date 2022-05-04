<?php

namespace Ebay\Buy\Marketplace\Insights\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type defines the fields for the various refinements of an item. You can use
 * the information in this container to create histograms, which help shoppers
 * choose exactly what they want.
 */
class Refinement extends AbstractModel
{
    /**
     * A array of containers for the all the aspect refinements.
     *
     * @var \Ebay\Buy\Marketplace\Insights\Model\AspectDistribution[]
     */
    public $aspectDistributions = null;

    /**
     * A array of containers for the all the buying option refinements.
     *
     * @var \Ebay\Buy\Marketplace\Insights\Model\BuyingOptionDistribution[]
     */
    public $buyingOptionDistributions = null;

    /**
     * A array of containers for the all the category refinements.
     *
     * @var \Ebay\Buy\Marketplace\Insights\Model\CategoryDistribution[]
     */
    public $categoryDistributions = null;

    /**
     * A array of containers for the all the condition refinements.
     *
     * @var \Ebay\Buy\Marketplace\Insights\Model\ConditionDistribution[]
     */
    public $conditionDistributions = null;

    /**
     * The identifier of the category that most of the items are part of.
     *
     * @var string
     */
    public $dominantCategoryId = null;
}
