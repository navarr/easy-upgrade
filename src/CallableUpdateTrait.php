<?php

namespace EasyUpgrade;

trait CallableUpdateTrait
{
    /**
     * Call a callable if $version > $currentVersion
     *
     * @param string   $version The version the software will become
     * @param string   $currentVersion The version the software is at
     * @param callable $callable A function to run if version > currentVersion
     * @return null
     */
    public function runAt($version, $currentVersion, callable $callable)
    {
        return version_compare($version, $currentVersion) === 1 ? $callable() : null;
    }
}
