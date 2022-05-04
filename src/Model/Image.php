<?php

namespace Ebay\Buy\Marketplace\Insights\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Type the defines the details of an image, such as size and image URL. Currently
 * only <b> imageUrl</b> is  populated. The <b> height</b> and <b> width</b> were
 * added for future use.
 */
class Image extends AbstractModel
{
    /**
     * <b> Reserved for future use. </b>.
     *
     * @var int
     */
    public $height = null;

    /**
     * The URL of the image.
     *
     * @var string
     */
    public $imageUrl = null;

    /**
     * <b> Reserved for future use. </b>.
     *
     * @var int
     */
    public $width = null;
}
