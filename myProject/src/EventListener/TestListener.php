<?php

namespace App\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class TestListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        // return the subscribed events, their methods and priorities
        return [
            KernelEvents::REQUEST => [
                'checkRequest'
            ]
        ];
    }

    public function checkRequest(RequestEvent $event)
    {
        //dd('coucou je passse ici');
        //dd($event->getRequest());
    }
}