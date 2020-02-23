<?php

namespace Service\SocialNetwork\APIs;

class FacebookAPI
{
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function createConnectionAndAuth(): void
    {
        echo "Создаем коннект к api Facebook и аутентифицируемся.\n";
    }

    public function sendMessage(string $userUniqueKey, string $message): void
    {
        echo "Отправляем сообщение пользователю с '$userUniqueKey' с текстом: '$message'.\n";
    }
}