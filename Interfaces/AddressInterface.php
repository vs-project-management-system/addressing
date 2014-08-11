<?php
namespace PMS\Component\Addressing\Interfaces;

interface AddressInterface
{
    public function getLabel();
    
    public function setLabel($label);
    
    public function getFirstName();
    
    public function setFirstName($firstName);
    
    public function getLastName();
    
    public function setLastName($lastName);
    
    public function getStreet();
    
    public function setStreet($street);
    
    public function getSuburb();
    
    public function setSuburb($suburb);
    
    public function getCity();
    
    public function setCity($city);
    
    public function getZone();
    
    public function setZone($zone);
    
    public function getPostalCode();
    
    public function setPostalCode($postalCode);
    
    public function getCountry();
    
    public function setCountry($country);
}
