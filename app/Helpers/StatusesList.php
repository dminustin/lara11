<?php

namespace App\Helpers;

class StatusesList
{
    use ToArrayHelper;

    protected int $unreadMessages = 0;
    protected int $unreadComments = 0;
    protected int $unreadPosts = 0;
    protected int $contactRequests = 0;
    protected float $rating = 0;

    protected array $varMapping = [
        'unreadMessages' => 'um',
        'unreadComments' => 'uc',
        'unreadPosts' => 'up',
        'contactRequests' => 'cr',
        'rating' => 'ra',
    ];
}
