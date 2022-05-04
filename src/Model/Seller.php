<?php

namespace Ebay\Buy\Marketplace\Insights\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for basic information about the seller of the
 * item.
 */
class Seller extends AbstractModel
{
    /**
     * The percentage of the total positive feedback.
     *
     * @var string
     */
    public $feedbackPercentage = null;

    /**
     * The feedback score of the seller. This value is based on the ratings from eBay
     * members that bought items from this seller.
     *
     * @var int
     */
    public $feedbackScore = null;

    /**
     * The username created by the seller for use on eBay.
     *
     * @var string
     */
    public $username = null;
}
