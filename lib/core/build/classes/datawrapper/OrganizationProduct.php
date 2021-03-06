<?php



/**
 * Skeleton subclass for representing a row from the 'organization_product' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.datawrapper
 */
class OrganizationProduct extends BaseOrganizationProduct
{
    public function isExpired(){
        return strtotime($this->expires) < time();
    }
}
