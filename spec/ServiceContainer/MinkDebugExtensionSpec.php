<?php

/*
 * This file is part of the Lakion package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Lakion\Behat\MinkDebugExtension\ServiceContainer;

use PhpSpec\ObjectBehavior;

/**
 * @mixin \Lakion\Behat\MinkDebugExtension\ServiceContainer\MinkDebugExtension
 *
 * @author Kamil Kokot <kamil.kokot@lakion.com>
 */
class MinkDebugExtensionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lakion\Behat\MinkDebugExtension\ServiceContainer\MinkDebugExtension');
    }

    function it_is_a_testwork_extension()
    {
        $this->shouldHaveType('Behat\Testwork\ServiceContainer\Extension');
    }

    function it_is_named_log()
    {
        $this->getConfigKey()->shouldReturn('mink_debug');
    }
}
