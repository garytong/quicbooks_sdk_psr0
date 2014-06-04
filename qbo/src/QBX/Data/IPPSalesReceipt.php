<?php

namespace QBX\Data;

use QBX\Data\IPPSalesTransaction;

/**
 * @xmlNamespace http://schema.intuit.com/finance/v3
 * @xmlType SalesTransaction
 * @xmlName IPPSalesReceipt
 * @var IPPSalesReceipt
 * @xmlDefinition SalesReceipt Transaction entity 
 */
class IPPSalesReceipt extends IPPSalesTransaction
{

    /**
     * Initializes this object, optionally with pre-defined property values    
     *                                                                         
     * Initializes this object and it's property members, using the dictionary
     * of key/value pairs passed as an optional argument.                      
     *                                                                         
     * @param dictionary $keyValInitializers key/value pairs to be populated into object's properties 
     * @param boolean $verbose specifies whether object should echo warnings   
     */
    public function __construct($keyValInitializers = array(), $verbose = FALSE)
    {
        foreach ($keyValInitializers as $initPropName => $initPropVal) {
            if (property_exists('IPPSalesReceipt', $initPropName)) {
                $this->{$initPropName} = $initPropVal;
            }
            else {
                if ($verbose)
                        echo "Property does not exist ($initPropName) in class (" . get_class($this) . ")";
            }
        }
    }

    /**
     * @Definition Extension entity for SalesReceipt

     * @xmlType element
     * @xmlNamespace http://schema.intuit.com/finance/v3
     * @xmlMinOccurs 0
     * @xmlMaxOccurs 1
     * @xmlName SalesReceiptEx
     * @var com\intuit\schema\finance\v3\IPPIntuitAnyType
     */
    public $SalesReceiptEx;

}

// end class IPPSalesReceipt
