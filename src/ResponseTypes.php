<?php

namespace Ebay\Buy\Marketplace\Insights;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public array $types = [
        'search' => [
            '200.' => 'Ebay\\Buy\\Marketplace\\Insights\\Model\\SalesHistoryPagedCollection',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'searchByImage' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\SearchPagedCollection',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getItem' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\Item',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getItemByLegacyId' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\Item',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getItems' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\Items',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getItemsByItemGroup' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\ItemGroup',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'checkCompatibility' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\CompatibilityResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'addItem' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\RemoteShopcartResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getShoppingCart' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\RemoteShopcartResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'removeItem' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\RemoteShopcartResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'updateQuantity' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\RemoteShopcartResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getDealItems' => [
            '200.' => 'Ebay\\Buy\\Deal\\Model\\DealItemSearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getEvent' => [
            '200.' => 'Ebay\\Buy\\Deal\\Model\\Event',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getEvents' => [
            '200.' => 'Ebay\\Buy\\Deal\\Model\\EventSearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getEventItems' => [
            '200.' => 'Ebay\\Buy\\Deal\\Model\\EventItemSearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getAccess' => [
            '200.' => 'Ebay\\Buy\\Feed\\Model\\ApplicationAccess',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getFeedType' => [
            '200.' => 'Ebay\\Buy\\Feed\\Model\\FeedType',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getFeedTypes' => [
            '200.' => 'Ebay\\Buy\\Feed\\Model\\FeedTypeSearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'downloadFile' => [
            '200.' => 'OpenAPI\\Runtime\\GenericResponse',
            '206.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '416.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getFile' => [
            '200.' => 'Ebay\\Buy\\Feed\\Model\\FileMetadata',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getFiles' => [
            '200.' => 'Ebay\\Buy\\Feed\\Model\\FileMetadataSearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getMerchandisedProducts' => [
            '200.' => 'Ebay\\Buy\\Marketing\\Model\\BestSellingProductResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
    ];
}
