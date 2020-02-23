<?php

namespace Service\SocialNetwork\APIs;

class VKontakteAPI
{
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function createConnection(): void
    {
        echo "Создаем коннект к api VKontakte.\n";
    }

    public function auth()
    {
        echo "Аутентифицируемся во Vkontakte.\n";
    }

    public function sendMessage(string $recipientId, string $message): void
    {
        echo "Отправляем сообщение пользователю с '$recipientId' с текстом: '$message'.\n";
    }
}