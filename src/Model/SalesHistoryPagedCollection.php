<?php

namespace Ebay\Buy\Marketplace\Insights\Model;

use OpenAPI\Runtime\AbstractModel;

class SalesHistoryPagedCollection extends AbstractModel
{
    /**
     * The URI of the current page of results from the result set.  <br /><br /><b> The
     * following example returns items 1 thru 5 from the list of items found. </b><br
     * /><code>https://api.ebay.com/buy/marketplace_insights/v1_beta/item_sales/search?q=shirt&&limit=5&offset=0</code>.
     *
     * @var string
     */
    public $href = null;

    /**
     * The type that defines the fields for a paginated result set of the sold items.
     * The response consists of 0 or more sequenced <em> result sets</em> where each
     * result sets has 0 or more items.<br /><br /><span class="tablenote"><b>
     * Note:</b> For items with multiple quantities that might result in multiple
     * transactions, and items with the <code>SELLER_DEFINED_VARIATIONS</code> group
     * type that might result in multiple transactions, only one deduped transaction is
     * returned in the search results.</span>.
     *
     * @var \Ebay\Buy\Marketplace\Insights\Model\ItemSales[]
     */
    public $itemSales = null;

    /**
     * The number of items returned on a single page from the result set. This value
     * can be set in the request with the <b>limit</b> query parameter.
     *
     * @var int
     */
    public $limit = null;

    /**
     * The URI for the following page of results. This value is returned only if there
     * is an additional page of results to display from the result set. <br><br><b>Max
     * length</b>: 2048.
     *
     * @var string
     */
    public $next = null;

    /**
     * The number of results skipped in the result set before listing the first
     * returned result. This value can be set in the request with the <b>offset</b>
     * query parameter.
     *
     * @var int
     */
    public $offset = null;

    /**
     * The URI for the preceding page of results. This value is returned only if there
     * is a previous page of results to display from the result set. <br><br><b>Max
     * length</b>: 2048.
     *
     * @var string
     */
    public $prev = null;

    /**
     * The container for all the search refinements.
     *
     * @var \Ebay\Buy\Marketplace\Insights\Model\Refinement
     */
    public $refinement = null;

    /**
     * The total number of items retrieved in the result set.  <br><br>If no items are
     * found, this field is returned with a value of <code>0</code>.
     *
     * @var int
     */
    public $total = null;
}
