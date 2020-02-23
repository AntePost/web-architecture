<?php

namespace Service\SocialNetwork\Adapters;

use Service\SocialNetwork\Contracts\NotificationInterface;
use Service\SocialNetwork\APIs\FacebookAPI;

class FacebookAdapter implements NotificationInterface
{
    private $facebookAPI;
    private $userUniqueKey;
    private $message;

    public function __construct(
        FacebookAPI $facebookAPI,
        string $userUniqueKey,
        string $message
    ) {
        $this->phoneApi = $phoneApi;
        $this->userUniqueKey = $userUniqueKey;
        $this->message = $message;
    }

    public function send(): void
    {
        $this->facebookAPI->createConnectionAndAuth();
        $this->facebookAPI->sendMessage($this->userUniqueKey, $this->message);
    }
}