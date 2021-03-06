<?php

use Behat\MinkExtension\Context\MinkContext;

/**
 * Behat context class.
 */
class FeatureContext extends MinkContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets it's own context object.
     * You can also pass arbitrary arguments to the context constructor through behat.yml.
     */
    public function __construct()
    {
    }
}
