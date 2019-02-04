<?php

namespace App\DataProvider\Base;

interface HasOriginalClass
{
    public static function getOriginalClass(): string;
}