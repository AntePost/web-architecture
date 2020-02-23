<?php

namespace Service\SocialNetwork\Adapters;

use Service\SocialNetwork\Contracts\NotificationInterface;
use Service\SocialNetwork\APIs\VkontakteAPI;

class VkontakteAdapter implements NotificationInterface
{
    private $vkontakteAPI;
    private $recipientId;
    private $message;

    public function __construct(
        VkontakteAPI $vkontakteAPI,
        string $recipientId,
        string $message
    ) {
        $this->phoneApi = $phoneApi;
        $this->recipientId = $recipientId;
        $this->message = $message;
    }

    public function send(): void
    {
        $this->vkontakteAPI->createConnection();
        $this->vkontakteAPI->auth();
        $this->vkontakteAPI->sendMessage($this->recipientId, $this->message);
    }
}