<?php
declare(strict_types=1);

namespace Api\Dto;

/**
 * Class UserCollectionV6
 * @package Api\Dto
 */
class UserCollectionV6 extends Collection
{
    /**
     * @param UserV6 $user
     */
    public function addUser(UserV6 $user): void
    {
        $this->collection[] = $user;
    }

    /**
     * @return UserV6[]
     */
    public function getUsers(): array
    {
        return $this->collection;
    }
}