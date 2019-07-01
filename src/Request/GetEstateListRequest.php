<?php

namespace Whise\Request;

class GetEstateListRequest extends ListRequest
{
    const METHOD = 'GET';
    const ENDPOINT = 'GetEstateList';
    const LIST = 'EstateList';

    const PROPERTIES = [
        'Address'                  => 'string',
        'AnnuityMonthlyRange'      => ['float'],
        'AreaRange'                => ['float'],
        'AvailabilityDateTime'     => 'DateTime',
        'AvailabilityIDList'       => ['integer'],
        'BaseContactTypeIDList'    => ['integer'],
        'BathRooms'                => 'integer',
        'CanHaveChildren'          => 'boolean',
        'CategoryIDList'           => ['integer'],
        'City'                     => 'string',
        'ContactIDList'            => ['integer'],
        'ContractTypeIdList'       => ['integer'],
        'CorporateSearch'          => 'boolean',
        'CountryID'                => 'integer',
        'CountryIDList'            => ['integer'],
        'CreateDateTimeRange'      => ['DateTime'],
        'Description'              => 'string',
        'DisplayStatusIdList'      => ['integer'],
        'EnvironmentTypeIdList'    => ['integer'],
        'EstateID'                 => 'integer',
        'EstateIDList'             => ['integer'],
        'EvaluationRange'          => ['integer'],
        'Fronts'                   => 'integer',
        'Furnished'                => 'integer',
        'Garage'                   => 'integer',
        'Garden'                   => 'integer',
        'GardenAreaRange'          => ['float'],
        'GroundAreaRange'          => ['float'],
        'HasParent'                => 'boolean',
        'IncludeChildrenArea'      => 'boolean',
        'IncludeGroupEstates'      => 'boolean',
        'InvestmentEstate'         => 'boolean',
        'IsParent'                 => 'boolean',
        'IsTopParent'              => 'boolean',
        'IsTypeEstate'             => 'boolean',
        'Language'                 => 'string',
        'MaxRooms'                 => 'integer',
        'MinBathRooms'             => 'integer',
        'MinRooms'                 => 'integer',
        'Name'                     => 'string',
        'NearlySoldRentDays'       => 'integer',
        'OfficeIDList'             => ['integer'],
        'OrderByFields'            => ['string'],
        'ParentID'                 => 'integer',
        'Parking'                  => 'integer',
        'PriceChangeDateTimeRange' => ['DateTime'],
        'PriceRange'               => ['float'],
        'PurposeIDList'            => ['integer'],
        'PurposeStatusIDList'      => ['integer'],
        'PutOnlineDateTimeRange'   => ['DateTime'],
        'ReferenceNumber'          => 'string',
        'RegionIDList'             => ['integer'],
        'RemoveRowLimit'           => 'boolean',
        'RepresentativeID'         => 'integer',
        'Rooms'                    => 'integer',
        'ShowDetails'              => 'boolean',
        'ShowRepresentatives'      => 'boolean',
        'StateID'                  => 'integer',
        'StateIDList'              => ['integer'],
        'StatusIDList'             => ['integer'],
        'SubCategoryIDList'        => ['integer'],
        'SubDetailIdList'          => ['integer'],
        'Terrace'                  => 'integer',
        'UpdateDateTimeRange'      => ['DateTime'],
        'ZipList'                  => ['string'],
        'ZipRange'                 => ['string'],
    ];
}