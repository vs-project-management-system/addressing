<?php
namespace PMS\Component\Addressing\Model;

class Country implements \PMS\Component\Interfaces\CountryInterface
{
    protected $name;
    
    protected $zones;
    
    protected $locale;
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    public function getZones()
    {
        return $this->zone;
    }
    
    public function setZones(array $zone)
    {
        $this->zones = $zone;
        
        return $this;
    }
    
    public function getZone($zone)
    {
        return $this->zones[$zone];
    }
    
    public function addZone(\PMS\Component\Addressing\Model\Zone $zone)
    {
        $this->zones[] = $zone;
        
        return $this;
    }
    
    public function getLocale()
    {
        return $this->locale;
    }
    
    public function setLocale($locale)
    {
        $this->locale = $locale;
        
        return $this;
    }
}
