<?php

namespace Structural\Bridge;

class ApiUserProvider implements UserProvider
{
    public function getUsers(): void
    {
        echo 'users api' . PHP_EOL;
    }
}
