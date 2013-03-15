<?php
class extended_inheritance_oxarticle extends extended_inheritance_oxarticle_parent{
    
    public function __construct($aParams = null)
    {
        $aInheritFields = $this->getConfig()->getConfigParam( "aInheritFields" );
        if (is_array($aInheritFields)){
            foreach ($aInheritFields as $sInheritField){
                $this->_aCopyParentField[] = $sInheritField;
            }
        }
        parent::__construct();
    }
    public function _isFieldEmpty( $sFieldName )
    {
        $mValue = $this->$sFieldName->value;
        $aDoubleCopyFields = $this->getConfig()->getConfigParam( "aDoubleCopyFields" );
        if (is_array($aDoubleCopyFields)){
            if (!$mValue && in_array( $sFieldName, $aDoubleCopyFields ) ) {
                return true;
            }
        }
        return parent::_isFieldEmpty( $sFieldName );
    }
}