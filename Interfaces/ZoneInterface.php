<?php
namespace PMS\Component\Addressing\Interfaces;

interface ZoneInterface
{
    public function getName();
    
    public function setName($name);
    
    public function getCountry();
    
    public function setCountry(\PMS\Component\Addressing\Model\Country $country);
    
    public function getCode();
    
    public function setCode($code);
}
