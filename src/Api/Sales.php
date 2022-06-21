<?php

namespace Ebay\Buy\Marketplace\Insights\Api;

use Ebay\Buy\Marketplace\Insights\Model\SalesHistoryPagedCollection;
use OpenAPI\Runtime\UnexpectedResponse;

class Sales extends AbstractAPI
{
    /**
     * <a href="https://developer.ebay.com/api-docs/static/versioning.html#limited"
     * target="_blank"><img src="/cms/img/docs/partners-api.svg" class="legend-icon
     * partners-icon"  alt="Limited Release" title="Limited Release" />(Limited
     * Release)</a>   <p>This method searches for sold eBay items by various URI query
     * parameters and retrieves the sales history of the items for the last 90 days.
     * You can search by keyword, category, eBay product ID (ePID), or GTIN, or a
     * combination of these.    </p>      <p>This method also supports the following:
     * <ul> <li>Filtering by the value of one or multiple fields, such as listing
     * format, item condition, price range, location, and more.  For the fields
     * supported by this method, see the <a href="#uri.filter">filter</a>
     * parameter.</li> <li>Retrieving the refinements (metadata) of an item , such as
     * item aspects (color, brand), condition, category, etc. using the <a
     * href="#uri.fieldgroups">fieldgroups</a> parameter. </li>  <li>Filtering by item
     * aspects and other refinements using the <a
     * href="#uri.aspect_filter">aspect_filter</a> parameter. </li> <li>Creating
     * aspects histograms, which enables shoppers to drill down in each refinement
     * narrowing the search results.  </li>  </ul></p>  <p>For details and examples of
     * these capabilities, see <a href="/api-docs/buy/static/api-browse.html">Browse
     * API</a> in the Buying Integration Guide.</p>     <h3><b>Pagination and sort
     * controls</b></h3><p>There are pagination controls (<b>limit</b> and
     * <b>offset</b> fields) and <b> sort</b> query parameters that  control/sort the
     * data that is returned. By default, the results are sorted by &quot;Best
     * Match&quot;. For more information about  Best Match, see the eBay help page <a
     * href="https://pages.ebay.com/help/sell/searchstanding.html" target="_blank">Best
     * Match</a>.  </p>                             <h3><b>URLs for this
     * method</b></h3>           <p><ul>            <li><b> Production URL: </b>
     * <code>https://api.ebay.com/buy/marketplace_insights/v1_beta/item_sales/search?</code></li>
     *            <li><b> Sandbox URL:
     * </b><code>https://api.sandbox.ebay.com/buy/marketplace_insights/v1_beta/item_sales/search?</code></li>
     *           </ul>    </p>     <h3><b> Request headers</b></h3> <p>You will want to
     * use the <b> X-EBAY-C-ENDUSERCTX</b> request header with this method. If you are
     * an <b>eBay Network Partner</b> you <b> must</b> use
     * <code>affiliateCampaignId=<em>ePNCampaignId</em>,affiliateReferenceId=<em>referenceId</em></code>
     * in the header in order to be paid for selling eBay items on your site . For
     * details see, <a href="/api-docs/buy/static/api-browse.html#Headers">Request
     * headers</a> in the <em> Buy APIs Overview</em>.</p>   <h3><b>URL Encoding for
     * Parameters</b></h3>            <p>Query parameter values need to be URL encoded.
     * For details, see <a
     * href="/api-docs/static/rest-request-components.html#parameters">URL encoding
     * query parameter values</a>.</p>            <h3><b>Restrictions </b></h3> <p> For
     * a list of supported sites and other restrictions, see <a
     * href="/api-docs/buy/marketplace-insights/overview.html#API">API
     * Restrictions</a>.</p>.
     *
     * @param array $queries options:
     *                       'aspect_filter'	string	This field lets you filter by item aspects. The aspect
     *                       name/value pairs and category, which is required, is used to limit the results
     *                       to specific aspects of the item. For example, in a clothing category one aspect
     *                       pair would be Color/Red. The results are returned in the <b>refinement</b>
     *                       container.   <br /><br />For example, the method below uses the category ID for
     *                       Women's Clothing. This will return only sold items for a woman's red or blue
     *                       shirt.   <br /><br
     *                       /><code>/buy/marketplace_insights/v1_beta/item_sales/search?q=shirt&category_ids=15724&aspect_filter=categoryId:15724,Color:{Red|Blue}</code>
     *                       <br /><br />To get a list of the aspects pairs and the category, which is
     *                       returned in the <b> dominantCategoryId</b> field, set <b> fieldgroups</b> to
     *                       <code>ASPECT_REFINEMENTS</code>.   <br /><br />
     *                       <code>/buy/marketplace_insights/v1_beta/item_sales/search?q=shirt&category_ids=15724&fieldgroups=ASPECT_REFINEMENTS</code>
     *                       <br /><br /><b>Format: </b>
     *                       <code><i>aspectName</i>:{<i>value1</i>|<i>value2</i>}</code>    <br /><br
     *                       /><b>Required: </b> The category ID is required <i>twice</i>; once as a URI
     *                       parameter and as part of the <b> aspect_filter</b> parameter. For implementation
     *                       help, refer to eBay API documentation at
     *                       https://developer.ebay.com/api-docs/buy/marketplace_insights/types/gct:AspectFilter
     *                       'category_ids'	string	The category ID is required and is used to limit the
     *                       results. For example, if you search for 'shirt' the result set will be very
     *                       large. But if you also include the category ID <code>137084</code>, the results
     *                       will be limited to 'Men's Athletic Apparel'. For example: <br /><br
     *                       /><code>/buy/marketplace-insights/v1_beta/item_sales/search?q=shirt&category_ids=137084</code>
     *                       <p>The list of eBay category IDs is not published and category
     *                       IDs are not the same across all the eBay marketplaces. You can use the following
     *                       techniques to find a category by site: </p>     <ul> <li>For the US marketplace,
     *                       use the <a
     *                       href="https://pages.ebay.com/sellerinformation/news/categorychanges.html"
     *                       target="_blank">Category Changes page</a>.</li> <li>Use the Taxonomy API. For
     *                       details see <a href="/api-docs/buy/buy-categories.html">Get Categories for Buy
     *                       APIs</a>. </li>  </ul>  <b> Usage:</b>  <ul><li>This field can have one category
     *                       ID or a comma separated list of IDs.</li>    <li>You can use <b>category_ids</b>
     *                       by itself or use it with any combination of the <b> gtin</b>, <b> epid</b>, and
     *                       <b> q</b> fields, which gives you additional control over the result set.</li>
     *                       </ul> <b>Restrictions: </b> <ul>  <li>Partners will be given a list of
     *                       categories they can use.  </li>  <li>To use a top-level (L1) category, you <b>
     *                       must</b> also include the <b> q</b>, or <b> gtin</b>, or <b> epid</b>  query
     *                       parameter.  </li>  </ul> <b>Maximum number of categories:</b> 4
     *                       'epid'	string	The ePID is the eBay product identifier of a product from the eBay
     *                       product catalog. This field limits the results to only items in the specified
     *                       ePID. <br /><br
     *                       /><code>/buy/marketplace-insights/v1_beta/item_sales/search?epid=241986085&category_ids=168058</code>
     *                       <br /><br />You can use the <a
     *                       href="/api-docs/commerce/catalog/resources/product_summary/methods/search">product_summary/search</a>
     *                       method in the <b>Catalog</b> API to search for the ePID of the product.   <br
     *                       /><br /><b> Required: </b> At least 1 <b> category_ids</b>  <br /><b> Maximum:
     *                       </b> 1 <b>epid</b>    <br /><b>Optional: </b>Any combination of <b> epid</b>,
     *                       <b> gtin</b>,  or <b> q</b>
     *                       'fieldgroups'	string	This field lets you control what is to be returned in the
     *                       response and accepts a comma separated list of values. <br /><br />The default
     *                       is <b> MATCHING_ITEMS</b>, which returns the items that match the keyword or
     *                       category specified. The other values return data that can be used to create
     *                       histograms. For code examples see, <a
     *                       href="#request.aspect_filter">aspect_filter</a>. <br /><br /><b> Valid Values:
     *                       </b> <ul>    <li><b> ASPECT_REFINEMENTS</b> - This returns the <a
     *                       href="#response.refinement.aspectDistributions">aspectDistributions</a>
     *                       container, which has the <b> dominantCategoryId</b>, <b> matchCount</b>, and <b>
     *                       refinementHref</b> for the various aspects of the items found. For example, if
     *                       you searched for 'Mustang', some of the aspect would be <b> Model Year</b>,  <b>
     *                       Exterior Color</b>, <b> Vehicle Mileage</b>, etc. <br /> <br /><span
     *                       class="tablenote"> <b>Note: </b> ASPECT_REFINEMENTS are category
     *                       specific.</span> <br /><br /></li>   <li><b> BUYING_OPTION_REFINEMENTS</b> -
     *                       This returns the <a
     *                       href="#response.refinement.buyingOptionDistributions">buyingOptionDistributions</a>
     *                       container, which has the <b> matchCount</b> and <b> refinementHref</b> for <b>
     *                       AUCTION</b> and <b> FIXED_PRICE</b> (Buy It Now) items. <br /><br /><span
     *                       class="tablenote"> <b>Note: </b>Classified items are not supported. </span> <br
     *                       /><br /> </li>   <li><b> CATEGORY_REFINEMENTS</b> - This returns the <a
     *                       href="#response.refinement.categoryDistributions">categoryDistributions</a>
     *                       container, which has the categories that the item is in.   </li>   <li><b>
     *                       CONDITION_REFINEMENTS</b> - This returns the <a
     *                       href="#response.refinement.conditionDistributions">conditionDistributions</a>
     *                       container, such as <b> NEW</b>, <b> USED</b>, etc. Within these groups are
     *                       multiple states of the condition. For example, <b> New </b> can be New without
     *                       tag, New in box, New without box, etc. </li>   <li><b> MATCHING_ITEMS</b> - This
     *                       is meant to be used with one or more of the refinement values above. You use
     *                       this to return the specified refinements and all the matching items. </li>
     *                       <li><b> FULL </b> - This returns all the refinement containers and all the
     *                       matching items.</li>   </ul> Code so that your app gracefully handles any future
     *                       changes to this list.  <br /><br /><b>Default: </b> MATCHING_ITEMS
     *                       'filter'	string	This field supports multiple field filters that can be used to
     *                       limit/customize the result set. <br /><br />The following lists the supported
     *                       filters. For details and examples for all the filters, see <a
     *                       href="/api-docs/buy/static/ref-buy-browse-filters.html">Buy API Field
     *                       Filters</a>.  <table> <tr> <td><ul>     <li><a
     *                       href="/api-docs/buy/static/ref-buy-browse-filters.html#buyingOptions">buyingOptions</a>
     *                       </li>    <li><a
     *                       href="/api-docs/buy/static/ref-buy-browse-filters.html#conditionIds">conditionIds</a>
     *                       </li>    <li><a
     *                       href="/api-docs/buy/static/ref-buy-browse-filters.html#conditions">conditions</a>
     *                       </li>    <li><a
     *                       href="/api-docs/buy/static/ref-buy-browse-filters.html#itemLocationCountry">itemLocationCountry</a>
     *                       </li> </ul> </td>      <td> <ul><li><a
     *                       href="/api-docs/buy/static/ref-buy-browse-filters.html#lastSoldDate">lastSoldDate</a>
     *                       </li>    <li><a
     *                       href="/api-docs/buy/static/ref-buy-browse-filters.html#price">price</a> </li>
     *                       <li><a
     *                       href="/api-docs/buy/static/ref-buy-browse-filters.html#priceCurrency">priceCurrency</a>
     *                       </li>  </ul></td>  </tr> </table> <br />The following example filters the result
     *                       set by price. <b>Note: </b>To filter by price, <b>price</b> and
     *                       <b>priceCurrency</b> must always be used together.   <br /><br
     *                       /><code>/buy/marketplace-insights/v1_beta/item_sales/search?q=iphone&category_ids=15724&filter=price:[50..500],priceCurrency:USD</code>
     *                       For implementation help, refer to eBay API documentation at
     *                       https://developer.ebay.com/api-docs/buy/marketplace_insights/types/cos:FilterField
     *                       'gtin'	string	This field lets you search by the Global Trade Item Number of the
     *                       item as defined by <a href="https://www.gtin.info"
     *                       target="_blank">https://www.gtin.info</a>. This can be a UPC (Universal Product
     *                       Code), EAN (European Article Number), or an ISBN (International Standard Book
     *                       Number) value.        <br /><br
     *                       /><code>/buy/marketplace-insights/v1_beta/item_sales/search?gtin=241986085&category_ids=9355</code>
     *                       <br /><br /><b> Required: </b> At least 1 <b> category_ids</b>  <br /><b>
     *                       Maximum: </b> 1 <b>gtin</b>    <br /><b>Optional: </b>Any combination of <b>
     *                       epid</b>,  <b> gtin</b>,  or <b> q</b>
     *                       'limit'	string	The number of items, from the result set, returned in a single
     *                       page.  <br /><br /><b> Default:</b> 50<br /><b> Maximum number of items per page
     *                       (limit): </b>200  <br /> <b> Maximum number of items in a result set: </b>
     *                       10,000
     *                       'offset'	string	Specifies the number of items to skip in the result set. This is
     *                       used with the <b> limit</b> field to control the pagination of the output.  <br
     *                       /><br />If <b> offset</b> is 0 and <b> limit</b> is 10, the method will retrieve
     *                       items 1-10 from the list of items returned, if <b> offset</b> is 10 and <b>
     *                       limit</b> is 10, the method will retrieve items 11 thru 20 from the list of
     *                       items returned.  <br /><br /><b> Valid Values</b>: 0-10,000 (inclusive) <br />
     *                       <b> Default:</b> 0 <br /> <b> Maximum number of items returned: </b> 10,000
     *                       'q'	string	A string consisting of one or more keywords that are used to search
     *                       for items on eBay. The keywords are handled as follows: <ul><li>If the keywords
     *                       are separated by a comma, it is treated as an AND. In the following example, the
     *                       query returns items that have iphone <b> AND</b> ipad.<br /><br
     *                       /><code>/buy/marketplace-insights/v1_beta/item_sales/search?q=iphone,ipad&category_ids=15724</code>
     *                       <br/> </li>  <li> If the keywords are separated by a space, it is treated as an
     *                       OR.  In the following examples, the query returns items that have iphone <b>
     *                       OR</b> ipad.   <br /><br
     *                       /><code>/buy/marketplace-insights/v1_beta/item_sales/search?q=iphone&category_ids=15724&nbsp;ipad</code>
     *                       <br
     *                       /><code>/buy/marketplace-insights/v1_beta/item_sales/search?q=iphone,&nbsp;ipad&category_ids=15724</code>
     *                       <br />   </li></ul> <b> Restriction: </b>The <code>*</code> wildcard character
     *                       is <b> not</b> allowed in this field. <br /><br /><b> Required: </b> At least 1
     *                       <b> category_ids</b>  <br /><b>Optional: </b>Any combination of <b> epid</b>,
     *                       <b> gtin</b>,  or <b> q</b>
     *                       'sort'	string	This field specifies the order and the field name to use to sort
     *                       the items. To sort in descending order use <code>-</code> before the field name.
     *                       Currently, you can only sort by price (in ascending or descending order).
     *                       <br /><br />If no sort parameter is submitted, the result set is sorted by
     *                       &quot;<a href="https://pages.ebay.com/help/sell/searchstanding.html"
     *                       target="_blank">Best Match</a>&quot;.     <br /><br />The following are examples
     *                       of using the <b> sort</b> query parameter.    <br /><br
     *                       /><table><tr><th>Sort</th><th>Result</th></tr><tr><td><code>&sort=price</code></td><td>
     *                       Sorts by <b> price</b> in ascending order (lowest price
     *                       first)</td></tr><tr><td><code>&sort=-price</code></td><td> Sorts by <b>
     *                       price</b> in descending order (highest price first)</td></tr></table><br /><b>
     *                       Default: </b> ascending For implementation help, refer to eBay API documentation
     *                       at
     *                       https://developer.ebay.com/api-docs/buy/marketplace_insights/types/cos:SortField
     *
     * @return SalesHistoryPagedCollection|UnexpectedResponse
     */
    public function search(array $queries = [])
    {
        return $this->request(
        'search',
        'GET',
        'item_sales/search',
        null,
        $queries,
        []
        );
    }
}
