<?php
/**
 * SimpleFM_FMServer_Sample
 * @author jsmall@soliantconsulting.com
 */

namespace Application\Entity;

use Soliant\SimpleFM\ZF2\Entity\AbstractEntity;
use Doctrine\Common\Collections\ArrayCollection;

class ProjectPointer extends AbstractEntity
{
    
    /**
     * Fields
     */
    protected $projectName;
    
    /**
     * Read-only Fields
     */
    protected $id;

    public function getName(){
        return $this->getProjectName();
    }

	/**
     * @return the $projectName
     */
    public function getProjectName ()
    {
        return $this->projectName;
    }

	/**
     * @see \Soliant\SimpleFM\Entity\AbstractEntity::unserialize()
     */
    public function unserialize ($simpleFMAdapterRow = array())
    {
        
        $this->recid                        = $simpleFMAdapterRow["recid"];
        $this->modid                        = $simpleFMAdapterRow["modid"];
        $this->id                           = $simpleFMAdapterRow["PROJECT ID MATCH FIELD"];
        $this->projectName                  = $simpleFMAdapterRow["Project Name"];

        return $this;
    }
    
    public static function getLayoutName()
    {
    	return 'ProjectPointer';
    }

}