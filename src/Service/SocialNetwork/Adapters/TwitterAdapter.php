<?php

namespace Service\SocialNetwork\Adapters;

use Service\SocialNetwork\Contracts\NotificationInterface;
use Service\SocialNetwork\APIs\TwitterAPI;

class TwitterAdapter implements NotificationInterface
{
    private $twitterAPI;
    private $twitterHandle;
    private $message;

    public function __construct(
        TwitterAPI $twitterAPI,
        string $twitterHandle,
        string $message
    ) {
        $this->phoneApi = $phoneApi;
        $this->twitterHandle = $twitterHandle;
        $this->message = $message;
    }

    public function send(): void
    {
        $this->twitterAPI->createConnection();
        $this->twitterAPI->authFirstPhase();
        $this->twitterAPI->authSecondPhase();
        $this->twitterAPI->sendMessage($this->twitterHandle, $this->message);
    }
}