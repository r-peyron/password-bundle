<?php

/*
* Disclaimer: This source code is protected by copyright law and by
* international conventions.
*
* Any reproduction or partial or total distribution of the source code, by any
* means whatsoever, is strictly forbidden.
*
* Anyone not complies with these provisions will be guilty of the offense of
* infringement and the penal sanctions provided for by law.
*
* © 2023 All rights reserved.
*/

namespace Ingeneo\Bundle\ResetPasswordBundle;

use Ingeneo\Bundle\ResetPasswordBundle\DependencyInjection\ResetPasswordBundleExtension;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ResetPasswordBundle extends Bundle
{

    public function getPath(): string
    {
        return __DIR__;
    }

    public function getContainerExtension (): ?ExtensionInterface
    {
        if (null === $this->extension) {
            $this->extension = new ResetPasswordBundleExtension();
        }

        return $this->extension ?: null;
    }

}
