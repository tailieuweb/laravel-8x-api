<?php 
    namespace App\Transformers;

use App\Models\Article;
use League\Fractal\TransformerAbstract;

class ArticleTransformer extends TransformerAbstract
    {
        public function transformWithId(Article $article) {
            return [
                'id' => (int) $article->id,
                'title' => $article->title
            ];
        }
    }
