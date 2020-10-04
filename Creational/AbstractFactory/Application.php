<?php


class Application
{
    private $subscriptionFactory;
    
    public function __construct()
    {
        $this->subscriptionFactory = new BookSubscriptionFactory();       
        $subscription = $this->subscriptionFactory->createSubscription();
    }
}