<?php

namespace Service\SocialNetwork\APIs;

class TwitterAPI
{
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function createConnection(): void
    {
        echo "Создаем коннект к api Twitter.\n";
    }

    public function authFirstPhase()
    {
        echo "Первый этап аутентификации в Twitter.\n";
    }

    public function authSecondPhase()
    {
        echo "Второй этап аутентификации в Twitter.\n";
    }

    public function sendMessage(string $twitterHandle, string $message): void
    {
        echo "Отправляем сообщение пользователю с '$twitterHandle' с текстом: '$message'.\n";
    }
}