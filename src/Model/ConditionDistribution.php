<?php

namespace Ebay\Buy\Marketplace\Insights\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The container that defines the fields for the conditions refinements. This
 * container is returned when <b> fieldgroups</b> is set to
 * <code>CONDITION_REFINEMENTS</code> or <code>FULL</code> in the request.
 */
class ConditionDistribution extends AbstractModel
{
    /**
     * The text describing the condition of the item, such as New or Used. For a list
     * of condition names, see <a
     * href="https://developer.ebay.com/devzone/finding/callref/enums/conditionIdList.html"
     * target="_blank"">ConditionEnum</a>.  <br /><br />Code so that your app
     * gracefully handles any future changes to this list.
     *
     * @var string
     */
    public $condition = null;

    /**
     * The identifier of the condition. For example, 1000 is the identifier for NEW.
     *
     * @var string
     */
    public $conditionId = null;

    /**
     * The number of items having the condition.
     *
     * @var int
     */
    public $matchCount = null;

    /**
     * The HATEOAS reference of this condition.
     *
     * @var string
     */
    public $refinementHref = null;
}
