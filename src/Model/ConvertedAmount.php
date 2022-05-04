<?php

namespace Ebay\Buy\Marketplace\Insights\Model;

use OpenAPI\Runtime\AbstractModel;

class ConvertedAmount extends AbstractModel
{
    /**
     * A three-letter <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>
     * code that indicates the currency of the amount in the <b> convertedFromValue</b>
     * field. This value represents the pre-conversion currency. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/marketplace_insights/types/ba:CurrencyCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $convertedFromCurrency = null;

    /**
     * The monetary amount before any conversion is performed, in the currency
     * specified by the <b> convertedFromCurrency</b> field. The <b> value</b> field
     * contains the converted amount of this value, in the currency specified by the
     * <b> currency</b> field.
     *
     * @var string
     */
    public $convertedFromValue = null;

    /**
     * A three-letter <a href="https://en.wikipedia.org/wiki/ISO_4217 ">ISO 4217</a>
     * code that indicates the currency of the amount in the <b> value</b> field. This
     * value represents the post-conversion currency of the amount in the <b> value</b>
     * field. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/marketplace_insights/types/ba:CurrencyCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $currency = null;

    /**
     * The monetary value in the currency specified in the <b> currency</b> field.
     *
     * @var string
     */
    public $value = null;
}
