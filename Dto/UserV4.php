<?php

namespace Api\Dto;

/**
 * Class UserV4
 * @package App\Dto
 */
class UserV4
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $forename;

    /**
     * @var string
     */
    private $surname;

    /**
     * @var AddressCollectionV1
     */
    private $addresses;
    
    public function __construct()
    {
        $this->addresses = new AddressCollectionV1();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return UserV4
     */
    public function setId(int $id): UserV4
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return UserV4
     */
    public function setUsername(string $username): UserV4
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return UserV4
     */
    public function setEmail(string $email): UserV4
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getForename(): string
    {
        return $this->forename;
    }

    /**
     * @param string $forename
     * @return UserV4
     */
    public function setForename(string $forename): UserV4
    {
        $this->forename = $forename;
        return $this;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     * @return UserV4
     */
    public function setSurname(string $surname): UserV4
    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * @return AddressCollectionV1
     */
    public function getAddresses(): AddressCollectionV1
    {
        return $this->addresses;
    }

    /**
     * @param AddressCollectionV1 $addresses
     * @return UserV4
     */
    public function setAddresses(AddressCollectionV1 $addresses): UserV4
    {
        $this->addresses = $addresses;
        return $this;
    }
}