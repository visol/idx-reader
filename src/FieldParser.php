<?php

/*
 * This file is part of the visol/idx-reader package.
 *
 * (c) Fabien Udriot <fabien.udriot@visol.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Visol\IdxReader;

/**
 * Class FieldParser
 */
class FieldParser
{

    /**
     * @var array
     */
    protected $fields = [];

    /**
     * @throws \RuntimeException
     */
    public function __construct()
    {
        $this->fields = [
            'version',
            'sender_id',
            'object_category',
            'object_type',
            'offer_type',
            'ref_property',
            'ref_house',
            'ref_object',
            'object_street',
            'object_zip',
            'object_city',
            'object_state',
            'object_country',
            'region',
            'object_situation',
            'available_from',
            'object_title',
            'object_description',
            'selling_price',
            'rent_net',
            'rent_extra',
            'price_unit',
            'currency',
            'gross_premium',
            'floor',
            'number_of_rooms',
            'number_of_apartments',
            'surface_living',
            'surface_property',
            'surface_usable',
            'volume',
            'year_built',
            'view',
            'fireplace',
            'cabletv',
            'elevator',
            'child_friendly',
            'parking',
            'garage',
            'balcony',
            'roof_floor',
            'distance_public_transport',
            'distance_shop',
            'distance_kindergarten',
            'distance_school1',
            'distance_school2',
            'picture_1_filename',
            'picture_2_filename',
            'picture_3_filename',
            'picture_4_filename',
            'picture_5_filename',
            'picture_1_title',
            'picture_2_title',
            'picture_3_title',
            'picture_4_title',
            'picture_5_title',
            'picture_1_description',
            'picture_2_description',
            'picture_3_description',
            'picture_4_description',
            'picture_5_description',
            'movie_filename',
            'movie_title',
            'movie_description',
            'document_filename',
            'document_title',
            'document_description',
            'url',
            'agency_id',
            'agency_name',
            'agency_name_2',
            'agency_reference',
            'agency_street',
            'agency_zip',
            'agency_city',
            'agency_country',
            'agency_phone',
            'agency_mobile',
            'agency_fax',
            'agency_email',
            'agency_logo',
            'visit_name',
            'visit_phone',
            'visit_email',
            'visit_remark',
            'publish_until',
            'destination',
            'picture_6_filename',
            'picture_7_filename',
            'picture_8_filename',
            'picture_9_filename',
            'picture_6_title',
            'picture_7_title',
            'picture_8_title',
            'picture_9_title',
            'picture_6_description',
            'picture_7_description',
            'picture_8_description',
            'picture_9_description',
            'picture_1_url',
            'picture_2_url',
            'picture_3_url',
            'picture_4_url',
            'picture_5_url',
            'picture_6_url',
            'picture_7_url',
            'picture_8_url',
            'picture_9_url',
            'distance_motorway',
            'ceiling_height',
            'hall_height',
            'maximal_floor_loading',
            'carrying_capacity_crane',
            'carrying_capacity_elevator',
            'isdn',
            'wheelchair_accessible',
            'animal_allowed',
            'ramp',
            'lifting_platform',
            'railway_terminal',
            'restrooms',
            'water_supply',
            'sewage_supply',
            'power_supply',
            'gas_supply',
            'municipal_info',
            'own_object_url',
            'billing_salutation',
            'billing_first_name',
            'billing_name',
            'billing_company',
            'billing_street',
            'billing_post_box',
            'billing_zip',
            'billing_place_name',
            'billing_land',
            'billing_phone_1',
            'billing_phone_2',
            'billing_mobile',
            'billing_language',
            'publishing_id',
            'delivery_id',
            'picture_10_filename',
            'picture_11_filename',
            'picture_12_filename',
            'picture_13_filename',
            'picture_10_title',
            'picture_11_title',
            'picture_12_title',
            'picture_13_title',
            'picture_10_description',
            'picture_11_description',
            'picture_12_description',
            'picture_13_description',
            'picture_10_url',
            'picture_11_url',
            'picture_12_url',
            'picture_13_url',
            'commission_sharing',
            'commission_own',
            'commission_partner',
            'agency_logo_2',
            'number_of_floors',
            'year_renovated',
            'flat_sharing_community',
            'corner_house',
            'middle_house',
            'building_land_connected',
            'gardenhouse',
            'raised_ground_floor',
            'new_building',
            'old_building',
            'under_building_laws',
            'under_roof',
            'swimmingpool',
            'minergie_general',
            'minergie_certified',
            'last_modified',
            'advertisement_id',
            'sparefield_1',
            'sparefield_2',
            'sparefield_3',
            #'sparefield_4',
        ];

    }

    /**
     * @return array
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @return int
     */
    public function getNumberOfFields()
    {
        return count($this->fields);
    }
}
