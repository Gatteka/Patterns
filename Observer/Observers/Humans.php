<?php

namespace Patterns\Observer\Observers;
use Patterns\Observer\API\ObserverInterface;
use Patterns\Observer\News;

/**
 * Class Humans
 */
class Humans implements ObserverInterface
{

    /**
     * @param News $news
     * @return mixed|void
     */
    public function update(News $news)
    {
        $information = $news->getNews();
        $this->readNews($information);
    }

    /**
     * @param $information
     */
    public function readNews($information)
    {
        echo "Humans reading $information";
    }
}