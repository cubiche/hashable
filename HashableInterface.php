<?php

/**
 * This file is part of the Cubiche package.
 *
 * Copyright (c) Cubiche
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Cubiche\Core\Hashable;

/**
 * Hashable interface.
 *
 * @author Karel Osorio Ramírez <osorioramirez@gmail.com>
 */
interface HashableInterface
{
    /**
     * Return hash id.
     *
     * @return string
     */
    public function hashCode();
}
