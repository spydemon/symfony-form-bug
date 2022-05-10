<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class OrderEntity
{
    #[Assert\Valid()]
    protected ?AddressEntity $billingAddress;

    #[Assert\Valid()]
    protected ?AddressEntity $shippingAddress;

    public function getBillingAddress(): ?AddressEntity
    {
        return $this->billingAddress;
    }

    public function setBillingAddress(?AddressEntity $address): self
    {
        $this->billingAddress = $address;
        return $this;
    }

    public function getShippingAddress(): ?AddressEntity
    {
        return $this->shippingAddress;
    }

    public function setShippingAddress(?AddressEntity $address): self
    {
        $this->shippingAddress = $address;
        return $this;
    }
}