<?php
namespace PMS\Component\Addressing\Interfaces;

interface CountryInterface
{
    public function getName();
    
    public function setName($name);
    
    public function getZones();
    
    public function setZones(array $zones);
    
    public function addZone(\PMS\Component\Addressing\Model\Zone $zone);
    
    public function getZone($zone);
}
