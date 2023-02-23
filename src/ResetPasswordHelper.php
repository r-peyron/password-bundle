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

/**
 * Class ResetPasswordHelper
 *
 * @author Rémy P. <r.peyron@ingeno.eu>
 * @package Ingeneo\Bundle\ResetPasswordBundle
 */
class ResetPasswordHelper
{

    private string $name;

    public function __construct (string $name)
    {
        $this->name = $name;
    }

    public function hello (): string
    {
        return "Hello " . $this->name . "!";
    }

}
