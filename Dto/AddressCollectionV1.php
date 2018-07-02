<?php
declare(strict_types=1);

namespace Api\Dto;

/**
 * Class AddressCollectionV1
 * @package Api\Dto
 */
class AddressCollectionV1 extends Collection
{
    /**
     * @param AddressV1 $address
     */
    public function addAddress(AddressV1 $address): void
    {
        $this->collection[] = $address;
    }

    /**
     * @return AddressV1[]
     */
    public function getAddresses(): array
    {
        return $this->collection;
    }
}