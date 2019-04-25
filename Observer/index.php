<?php
namespace Patterns\Observer;
use Patterns\Observer\Subject\Newsletter;
use Patterns\Observer\Observers\Animals;
use Patterns\Observer\Observers\Humans;

$newsLatter = new Newsletter();
$animals = new Animals();
$humans = new Humans();
$news = new News('News "everyone is shit"');
$newsLatter->addSomeoneToInforming($animals);
$newsLatter->addSomeoneToInforming($humans);
$newsLatter->getNews($news);