<?php
namespace PMS\Component\Addressing\Model;

class Zone implements \PMS\Component\Interfaces\ZoneInterface
{
    protected $name;
    
    protected $country;
    
    protected $code;
    
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
    
    public function getCountry()
    {
        return $this->country;
    }
    
    public function setCountry(\PMS\Component\Addressing\Model\Country $country)
    {
        $this->country = $country;
        
        return $this;
    }
    
    public function getCode()
    {
        return $this->code;
    }
    
    public function setCode($code)
    {
        $this->code = $code;
        
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
