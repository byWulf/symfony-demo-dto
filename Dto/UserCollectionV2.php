<?php
declare(strict_types=1);

namespace Api\Dto;

/**
 * Class UserCollectionV2
 * @package Api\Dto
 */
class UserCollectionV2 extends Collection
{
    /**
     * @param UserV2 $user
     */
    public function addUser(UserV2 $user): void
    {
        $this->collection[] = $user;
    }

    /**
     * @return UserV2[]
     */
    public function getUsers(): array
    {
        return $this->collection;
    }
}