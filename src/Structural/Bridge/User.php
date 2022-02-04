<?php

namespace Structural\Bridge;

abstract class User
{
    public function __construct(protected UserProvider $provider)
    {
    }

    abstract public function getUsers(): void;
}
