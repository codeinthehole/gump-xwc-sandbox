<?php

/*
 * This file is part of Twig.
 *
 * (c) 2010 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Represents a template filter.
 *
 * @package    twig
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 */
interface Twig_FilterInterface
{
    public function compile();
    public function needsEnvironment();
    public function getSafe(Twig_Node $filterArgs);
    public function getPreEscape();
}
