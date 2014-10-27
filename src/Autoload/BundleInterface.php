<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

namespace Contao\Bundle\CoreBundle\Autoload;

/**
 * Autoload bundle interface
 *
 * @author Leo Feyer <https://contao.org>
 */
interface BundleInterface
{
    /**
     * Returns the class
     *
     * @return string The class
     */
    public function getClass();

    /**
     * Returns the name
     *
     * @return string The name
     */
    public function getName();

    /**
     * Returns the replaces
     *
     * @return array The replace
     */
    public function getReplace();

    /**
     * Sets the replaces
     *
     * @param array $replace The replaces
     *
     * @return $this The object instance
     */
    public function setReplace(array $replace);

    /**
     * Returns the environments
     *
     * @return array The environments
     */
    public function getEnvironments();

    /**
     * Sets the environments
     *
     * @param array $environments The environments
     *
     * @return $this The object instance
     */
    public function setEnvironments(array $environments);

    /**
     * Returns the "load after" bundles
     *
     * @return array The "load after" bundles
     */
    public function getLoadAfter();

    /**
     * Sets the "load after" bundles
     *
     * @param array $loadAfter The "load after" bundles
     *
     * @return $this The object instance
     */
    public function setLoadAfter(array $loadAfter);
}