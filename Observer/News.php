<?php

namespace Patterns\Observer;
/**
 * Class News
 */
class News
{
    /**
     * @var string
     */
    protected $event;

    /**
     * News constructor.
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->event = $title;
    }

    /**
     * @return string
     */
    public function getNews()
    {
        return $this->event;
    }


    public function hi()
    {
        echo 'hi';
    }
}