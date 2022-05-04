<?php

namespace Ebay\Buy\Marketplace\Insights\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type defines the fields for the sold items sales history information.
 */
class ItemSales extends AbstractModel
{
    /**
     * An array of containers with the URLs for the images that are in addition to the
     * primary image.  The primary image is returned in the <b> image.imageUrl</b>
     * field.
     *
     * @var \Ebay\Buy\Marketplace\Insights\Model\Image[]
     */
    public $additionalImages = null;

    /**
     * This indicates if the item is for  adults only. For more information about
     * adult-only items on eBay, see <a
     * href="https://pages.ebay.com/help/policies/adult-only.html"
     * target="_blank">Adult items policy</a> for sellers and <a
     * href="https://www.ebay.com/help/terms-conditions/default/searching-adult-items?id=4661"
     * target="_blank">Adult-Only items on eBay</a> for buyers.
     *
     * @var bool
     */
    public $adultOnly = null;

    /**
     * This integer value indicates the total number of bids that have been placed for
     * an auction item. This field is only returned for auction items.
     *
     * @var int
     */
    public $bidCount = null;

    /**
     * A comma separated list of the purchase options available for the item, such as
     * FIXED_PRICE, AUCTION.  <ul> <li><code>FIXED_PRICE</code> - Returned for
     * fixed-price items (non-auction)</li>  <li><code>AUCTION</code> - Returned for
     * auction items without Buy It Now feature</li>  <li><code>FIXED_PRICE</code> and
     * <code>AUCTION</code> - Returned for auction items enabled with the Buy It Now
     * feature</li> </ul> Code so that your app gracefully handles any future changes
     * to this list.
     *
     * @var string[]
     */
    public $buyingOptions = null;

    /**
     * This container returns the primary category ID of the item, as well as the
     * secondary category if the item was listed in two categories.
     *
     * @var \Ebay\Buy\Marketplace\Insights\Model\Category[]
     */
    public $categories = null;

    /**
     * The text describing the condition of the item, such as New or Used. For a list
     * of condition names, see <a
     * href="https://developer.ebay.com/devzone/finding/callref/enums/conditionIdList.html"
     * target="_blank">Item Condition IDs and Names</a>.  <br /><br />Code so that your
     * app gracefully handles any future changes to this list.
     *
     * @var string
     */
    public $condition = null;

    /**
     * The identifier of the condition of the item. For example, 1000 is the identifier
     * for NEW. For a list of condition names and IDs, see <a
     * href="https://developer.ebay.com/devzone/finding/callref/enums/conditionIdList.html"
     * target="_blank">Item Condition IDs and Names</a>. <br /><br />Code so that your
     * app gracefully handles any future changes to this list.
     *
     * @var string
     */
    public $conditionId = null;

    /**
     * An ePID is the eBay product identifier of a product from the eBay product
     * catalog.  This indicates the product in which the item belongs.
     *
     * @var string
     */
    public $epid = null;

    /**
     * The URL to the primary image of the item.
     *
     * @var \Ebay\Buy\Marketplace\Insights\Model\Image
     */
    public $image = null;

    /**
     * The URL to the View Item page of the item, which includes the affiliate tracking
     * ID. This field is only returned if the eBay partner  enables affiliate tracking
     * for the item by including the <code><a
     * href="/api-docs/buy/static/api-browse.html#Headers">X-EBAY-C-ENDUSERCTX</a></code>
     * request header in the method.
     *
     * @var string
     */
    public $itemAffiliateWebUrl = null;

    /**
     * The HATEOAS reference of the parent page of the item group. An item group is an
     * item that has various aspect differences, such as color, size, storage capacity,
     * etc. <br /> <br /><span class="tablenote"> <b>  Note: </b>This field is returned
     * only for item groups.</span>.
     *
     * @var string
     */
    public $itemGroupHref = null;

    /**
     * Indicates the item group type. An item group is an item that has various aspect
     * differences, such as color, size, storage capacity, etc. <br /><br />Currently,
     * only the <code>SELLER_DEFINED_VARIATIONS</code> group type is supported and
     * indicates that this is an item group created by the seller.<br /> <br /><span
     * class="tablenote"> <b> Note: </b>This field is returned only for item
     * groups.</span><br /><br />Code so that your app gracefully handles any future
     * changes to this list.
     *
     * @var string
     */
    public $itemGroupType = null;

    /**
     * The URI of the item.
     *
     * @var string
     */
    public $itemHref = null;

    /**
     * The unique RESTful identifier of the item.
     *
     * @var string
     */
    public $itemId = null;

    /**
     * This container returns the postal code and country of the location of the item.
     *
     * @var \Ebay\Buy\Marketplace\Insights\Model\ItemLocation
     */
    public $itemLocation = null;

    /**
     * The URL to the View Item page of the item.
     *
     * @var string
     */
    public $itemWebUrl = null;

    /**
     * The date the last item was purchased within the last 90 days. The
     * <b>totalSoldQuantity</b> returns the total number of items that were sold. This
     * field returns the date the last item in that group was sold.
     *
     * @var string
     */
    public $lastSoldDate = null;

    /**
     * The sold price of the last item purchased within the last 90 days.<br /><br
     * />The <b>totalSoldQuantity</b> returns the total number of items that were sold.
     * This field returns the date the last item in that group was sold.<br /><br
     * /><span class="tablenote"><b> Note: </b>The price includes the value-added tax
     * (VAT) for applicable jurisdictions when requested from supported marketplaces.
     * In this case, users must pass the <a
     * href="/api-docs/static/rest-request-components.html#HTTP"><code>X-EBAY-C-MARKETPLACE-ID</code></a>
     * request header specifying the supported marketplace (such as
     * <code>EBAY_GB</code>) to see VAT-inclusive pricing. For more information on VAT,
     * refer to <a
     * href="https://www.ebay.co.uk/help/listings/default/vat-obligations-eu?id=4650&st=12&pos=1&query=Your%20VAT%20obligations%20in%20the%20EU&intent=VAT">VAT
     * Obligations in the EU</a>.</span>.
     *
     * @var \Ebay\Buy\Marketplace\Insights\Model\ConvertedAmount
     */
    public $lastSoldPrice = null;

    /**
     * This container returns basic information about the seller of the item, such as
     * name, feedback score, etc.
     *
     * @var \Ebay\Buy\Marketplace\Insights\Model\Seller
     */
    public $seller = null;

    /**
     * An array of thumbnail images for the item.
     *
     * @var \Ebay\Buy\Marketplace\Insights\Model\Image[]
     */
    public $thumbnailImages = null;

    /**
     * The seller-created title of the item.  <br><br><b>Maximum Length: </b> 80
     * characters.
     *
     * @var string
     */
    public $title = null;

    /**
     * The total number of this item that have been sold.
     *
     * @var int
     */
    public $totalSoldQuantity = null;
}
