<?php
declare(strict_types=1);

namespace Api\Dto;

/**
 * Class CommentV1
 * @package Api\Dto
 */
class CommentV1
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
     * @var UserV1[]
     */
    private $likes;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return CommentV1
     */
    public function setId(int $id): CommentV1
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
     * @return CommentV1
     */
    public function setUser(UserV2 $user): CommentV1
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
     * @return CommentV1
     */
    public function setText(string $text): CommentV1
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return UserV1[]
     */
    public function getLikes(): array
    {
        return $this->likes;
    }

    /**
     * @param UserV1[] $likes
     * @return CommentV1
     */
    public function setLikes(array $likes): CommentV1
    {
        $this->likes = $likes;
        return $this;
    }

    /**
     * @param UserV1 $user
     * @return CommentV1
     */
    public function addLike(UserV1 $user): CommentV1
    {
        $this->likes[] = $user;
        return $this;
    }
}