<?php

namespace taema\youtubegallery\tests;

/**
 * Class LangTest
 *
 * @package taema\youtubegallery\tests
 *
 * @author Mathieu Tanguay <mathieu.tanguay@taema.ca>
 * @copyright Taema Inc.
 */
class LangTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     *
     * Require each lang file to ensure there is no syntax error and that
     * it returns an array.
     */
    public function lang_files_are_arrays()
    {
        foreach (glob('lang/*/lang.php') as $file) {
            $lang = require $file;

            $this->assertInternalType('array', $lang);
        }
    }
}
