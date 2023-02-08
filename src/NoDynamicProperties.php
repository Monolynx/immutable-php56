<?php

namespace Jasny\Immutable;

use LogicException;

/**
 * Disable dynamic properties.
 */
trait NoDynamicProperties
{
    /**
     * Magic method called when trying to set a non-existing property.
     *
     * @param string $property
     * @param mixed  $value
     * @throws LogicException
     */
    public function __set($property, $value)
    {
        throw new LogicException(sprintf('%s has no property "%s"', get_class($this), $property));
    }
}
