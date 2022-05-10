<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class AddressEntity
{
    #[Assert\NotNull()]
    protected ?int $streetNumber;

    public function getStreetNumber(): ?int
    {
        return $this->streetNumber;
    }

    public function setStreetNumber(?int $number): self
    {
        $this->streetNumber = $number;
        return $this;
    }
}