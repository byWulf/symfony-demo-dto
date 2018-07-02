<?php
declare(strict_types=1);

namespace Api\Dto;

/**
 * Class ArticleCollectionV2
 * @package Api\Dto
 */
class ArticleCollectionV2 extends Collection
{
    /**
     * @param ArticleV2 $article
     */
    public function addArticle(ArticleV2 $article): void
    {
        $this->collection[] = $article;
    }

    /**
     * @return ArticleV2[]
     */
    public function getArticles(): array
    {
        return $this->collection;
    }
}