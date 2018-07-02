<?php
declare(strict_types=1);

namespace Api\Dto;

/**
 * Class UserCollectionV1
 * @package Api\Dto
 */
class UserCollectionV1 extends Collection
{
    /**
     * @param UserV1 $user
     */
    public function addUser(UserV1 $user): void
    {
        $this->collection[] = $user;
    }

    /**
     * @return UserV1[]
     */
    public function getUsers(): array
    {
        return $this->collection;
    }
}