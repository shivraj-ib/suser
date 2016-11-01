<?php

namespace Acme\FosChildBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AcmeFosChildBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
