<?php

namespace EasyUpgrade;

trait CallableUpdateTrait
{
    public function runAt($version, $currentVersion, callable $callable)
    {
        return version_compare($version, $currentVersion) === 1 ? $callable() : null;
    }
}
