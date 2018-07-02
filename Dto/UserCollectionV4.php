<?php
declare(strict_types=1);

namespace Api\Dto;

/**
 * Class UserCollectionV4
 * @package Api\Dto
 */
class UserCollectionV4 extends Collection
{
    /**
     * @param UserV4 $user
     */
    public function addUser(UserV4 $user): void
    {
        $this->collection[] = $user;
    }

    /**
     * @return UserV4[]
     */
    public function getUsers(): array
    {
        return $this->collection;
    }
}