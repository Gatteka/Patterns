<?php
namespace Patterns\Observer\Subject;
use Patterns\Observer\API\NewsletterInterface;
use Patterns\Observer\API\ObserverInterface;
use Patterns\Observer\News;

/**
 * Class Newsletter
 */
class Newsletter implements NewsletterInterface
{
    protected $observers = [];

    /**
     * @param ObserverInterface $someone
     */
    public function addSomeoneToInforming(ObserverInterface $someone)
    {
        $this->observers[] = $someone;
    }

    /**
     * @param ObserverInterface $someone
     */
    public function removeSomeoneToInforming(ObserverInterface $someone)
    {
        if ($this->observers) {
            $key = array_search($someone, $this->observers);
            if ($key !== false) {
                unset($this->observers[$key]);
            }
        }
    }

    /**
     * @param News $information
     */
    public function inform(News $information)
    {
        foreach ($this->observers as $observer) {
            $observer->update($information);
        }
    }

    /**
     * @param News $information
     */
    public function getNews(News $information)
    {
        $this->inform($information);
    }


}