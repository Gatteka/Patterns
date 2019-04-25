<?php
namespace Patterns\Observer\API;

use Patterns\Observer\News;

/**
 * Interface NewsletterInterface
 */
interface NewsletterInterface
{
    /**
     * @param ObserverInterface $someone
     * @return mixed
     */
    public function addSomeoneToInforming(ObserverInterface $someone);

    /**
     * @param ObserverInterface $someone
     * @return mixed
     */
    public function removeSomeoneToInforming(ObserverInterface $someone);

    /**
     * @param News $information
     * @return mixed
     */
    public function inform(News $information);

    /**
     * @param News $information
     * @return mixed
     */
    public function getNews(News $information);

}