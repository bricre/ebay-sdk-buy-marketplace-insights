<?php

namespace Ebay\Buy\Marketplace\Insights\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the locaton of an item, including postal
 * code, county, state/province, street address, city, and country (2-digit ISO
 * code).
 */
class ItemLocation extends AbstractModel
{
    /**
     * The first line of the street address.
     *
     * @var string
     */
    public $addressLine1 = null;

    /**
     * The second line of the street address. This field may contain such values as an
     * apartment or suite number.
     *
     * @var string
     */
    public $addressLine2 = null;

    /**
     * The city in which the item is located.
     *
     * @var string
     */
    public $city = null;

    /**
     * The two-letter <a href="https://www.iso.org/iso-3166-country-codes.html">ISO
     * 3166</a> standard code that indicates the country in which the item is located.
     * For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/marketplace_insights/types/ba:CountryCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $country = null;

    /**
     * The county in which the item is located.
     *
     * @var string
     */
    public $county = null;

    /**
     * The postal code (or zip code in US) where the item is located.<br /> <br /><span
     * class="tablenote"> <b>  Note: </b>Beginning in late January 2020, the displayed
     * postal code will be masked to all users. Different countries will mask
     * postal/zip codes in slightly different ways, but an example would be
     * <code>951**</code>.</span>.
     *
     * @var string
     */
    public $postalCode = null;

    /**
     * The state or province in which the item is located.
     *
     * @var string
     */
    public $stateOrProvince = null;
}
