<?php

namespace Tomloprod\BC3Reader;

/**
 * BC3Reader
 *
 * @version 1.0.0
 * @package Tomloprod\BC3Reader
 * @category  Library
 * @author  Tomás L.R (@tomloprod)
 */
class BC3
{

    public $bc3File;

    public function __construct($bc3File)
    {
        $this->bc3File = $bc3File;
    }
}
