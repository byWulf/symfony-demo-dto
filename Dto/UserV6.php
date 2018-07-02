<?php

namespace Api\Dto;

/**
 * Class UserV6
 * @package App\Dto
 */
class UserV6
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

    /**
     * @var UserCollectionV6
     */
    private $parents;

    /**
     * @var ArticleCollectionV2
     */
    private $articles;

    public function __construct()
    {
        $this->addresses = new AddressCollectionV1();
        $this->parents = new UserCollectionV6();
        $this->articles = new ArticleCollectionV2();
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
     * @return UserV6
     */
    public function setId(int $id): UserV6
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
     * @return UserV6
     */
    public function setUsername(string $username): UserV6
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
     * @return UserV6
     */
    public function setEmail(string $email): UserV6
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
     * @return UserV6
     */
    public function setForename(string $forename): UserV6
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
     * @return UserV6
     */
    public function setSurname(string $surname): UserV6
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
     * @return UserV6
     */
    public function setAddresses(AddressCollectionV1 $addresses): UserV6
    {
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * @return UserCollectionV6
     */
    public function getParents(): UserCollectionV6
    {
        return $this->parents;
    }

    /**
     * @param UserCollectionV6 $parents
     * @return UserV6
     */
    public function setParents(UserCollectionV6 $parents): UserV6
    {
        $this->parents = $parents;
        return $this;
    }

    /**
     * @return ArticleCollectionV2
     */
    public function getArticles(): ArticleCollectionV2
    {
        return $this->articles;
    }

    /**
     * @param ArticleCollectionV2 $articles
     * @return UserV6
     */
    public function setArticles(ArticleCollectionV2 $articles): UserV6
    {
        $this->articles = $articles;
        return $this;
    }
}