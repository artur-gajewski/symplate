<?php

namespace Project\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ProjectUserBundle extends Bundle
{
    public function getParent()
    {
        return "FOSUserBundle";
    }
}
