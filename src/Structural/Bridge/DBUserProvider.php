<?php

namespace Structural\Bridge;

class DBUserProvider implements UserProvider
{
    public function getUsers(): void
    {
        echo 'users database' . PHP_EOL;
    }
}
