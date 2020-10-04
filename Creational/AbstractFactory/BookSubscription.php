<?php


class BookSubscription implements Subscription
{
    
    public function getType(): string
    {
        return 'Book';
    }
}