<?php
declare(strict_types=1);

namespace Api\Dto;

/**
 * Class ArticleCollectionV1
 * @package Api\Dto
 */
class ArticleCollectionV2 extends Collection
{
    /**
     * @param ArticleV1 $article
     */
    public function addArticle(ArticleV1 $article): void
    {
        $this->collection[] = $article;
    }

    /**
     * @return ArticleV1[]
     */
    public function getArticles(): array
    {
        return $this->collection;
    }
}