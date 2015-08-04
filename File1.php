<?php

/**
 * This is just a test file
 */
Class A
{
    protected $_a;
    protected $_b;

    /**
     * @param $a
     * @param $b
     */
    public function __construct($a, $b)
    {
        $this->_a = $a;
        $this->_b = $b;
    }
}