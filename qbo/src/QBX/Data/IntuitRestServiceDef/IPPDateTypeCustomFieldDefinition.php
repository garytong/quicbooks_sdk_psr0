<?php

namespace QBX\Data\IntuitRestServiceDef;

/**
 * @xmlNamespace http://schema.intuit.com/finance/v3
 * @xmlType DateTypeCustomFieldDefinition
 * @xmlName IPPDateTypeCustomFieldDefinition
 * @var IPPDateTypeCustomFieldDefinition
 */
class IPPDateTypeCustomFieldDefinitionWrapper extends IPPDateTypeCustomFieldDefinition
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
            if (property_exists('IPPDateTypeCustomFieldDefinitionWrapper', $initPropName)) {
                $this->{$initPropName} = $initPropVal;
            }
            else {
                if ($verbose)
                        echo "Property does not exist ($initPropName) in class (" . get_class($this) . ")";
            }
        }
    }

}

// end class IPPDateTypeCustomFieldDefinitionWrapper
