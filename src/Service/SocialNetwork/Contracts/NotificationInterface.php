<?php

namespace Service\SocialNetwork\Contracts;

interface NotificationInterface
{
    public function send(): void;
}