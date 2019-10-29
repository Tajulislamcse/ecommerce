<?php
class Address
{
        private $userName;
        private $phoneNo;
        private $email;
        private $flatNo;
        private $floor;
        private $houseNo;
        private $zipCode;
        private $street;
        private $city;
        private $country;
        public function formattedFullAddress()
        {
            return "$this->userName,$this->phoneNo,$this->email,$this->flatNO,
                    $this->floor, $this->houseNo,$this->zipCode,$this->street,
                    $this->city,$this->country";
        }
}
