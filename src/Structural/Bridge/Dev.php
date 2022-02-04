<?php

namespace Structural\Bridge;

class Dev extends User
{
    public function getUsers(): void
    {
        $this->provider->getUsers();
    }
}
