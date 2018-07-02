<?php

namespace Api\Dto;

/**
 * Class UserV5
 * @package App\Dto
 */
class UserV5
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
     * @var AddressV1[]
     */
    private $addresses = [];

    /**
     * @var UserV5[]
     */
    private $parents = [];

    /**
     * @var ArticleV1[]
     */
    private $articles = [];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return UserV5
     */
    public function setId(int $id): UserV5
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
     * @return UserV5
     */
    public function setUsername(string $username): UserV5
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
     * @return UserV5
     */
    public function setEmail(string $email): UserV5
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
     * @return UserV5
     */
    public function setForename(string $forename): UserV5
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
     * @return UserV5
     */
    public function setSurname(string $surname): UserV5
    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * @return AddressV1[]
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    /**
     * @param AddressV1[] $addresses
     * @return UserV5
     */
    public function setAddresses(array $addresses): UserV5
    {
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * @param AddressV1 $address
     * @return UserV5
     */
    public function addAddress(AddressV1 $address): UserV5
    {
        $this->addresses[] = $address;
        return $this;
    }

    /**
     * @return UserV5[]
     */
    public function getParents(): array
    {
        return $this->parents;
    }

    /**
     * @param UserV5[] $parents
     * @return UserV5
     */
    public function setParents(array $parents): UserV5
    {
        $this->parents = $parents;
        return $this;
    }


    /**
     * @param UserV5 $parent
     * @return UserV5
     */
    public function addParent(UserV5 $parent): UserV5
    {
        $this->parents[] = $parent;
        return $this;
    }

    /**
     * @return ArticleV1[]
     */
    public function getArticles(): array
    {
        return $this->articles;
    }

    /**
     * @param ArticleV1[] $articles
     * @return UserV5
     */
    public function setArticles(array $articles): UserV5
    {
        $this->articles = $articles;
        return $this;
    }

    /**
     * @param ArticleV1 $article
     * @return UserV5
     */
    public function addArticle(ArticleV1 $article): UserV5
    {
        $this->articles[] = $article;
        return $this;
    }
}