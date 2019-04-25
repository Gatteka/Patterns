<?php

namespace Patterns\Observer\API;
use Patterns\Observer\News;

/**
 * Interface ObserverInterface
 */
interface ObserverInterface
{
    /**
     * @param News $news
     * @return mixed
     */
    public function update(News $news);
}