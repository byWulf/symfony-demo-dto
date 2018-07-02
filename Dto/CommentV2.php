<?php
declare(strict_types=1);

namespace Api\Dto;

/**
 * Class CommentV2
 * @package Api\Dto
 */
class CommentV2
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var UserV2
     */
    private $user;

    /**
     * @var string
     */
    private $text;

    /**
     * @var UserCollectionV1
     */
    private $likes;

    public function __construct()
    {
        $this->likes = new UserCollectionV1();
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
     * @return CommentV2
     */
    public function setId(int $id): CommentV2
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return UserV2
     */
    public function getUser(): UserV2
    {
        return $this->user;
    }

    /**
     * @param UserV2 $user
     * @return CommentV2
     */
    public function setUser(UserV2 $user): CommentV2
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return CommentV2
     */
    public function setText(string $text): CommentV2
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return UserCollectionV1
     */
    public function getLikes(): UserCollectionV1
    {
        return $this->likes;
    }

    /**
     * @param UserCollectionV1 $likes
     * @return CommentV2
     */
    public function setLikes(UserCollectionV1 $likes): CommentV2
    {
        $this->likes = $likes;
        return $this;
    }
}