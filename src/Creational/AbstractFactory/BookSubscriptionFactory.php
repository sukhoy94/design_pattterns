<?php


class BookSubscriptionFactory implements SubcriptionFactory
{
    
    public function createSubscription(): BookSubscription
    {
        return new BookSubscription();
    }
}