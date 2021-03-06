<?php
/**
 * This file is part of BcBootstrapBundle.
 *
 * (c) 2012-2013 by Florian Eckerstorfer
 */

namespace Bc\Bundle\BootstrapBundle\Tests\Twig;

use Bc\Bundle\BootstrapBundle\Twig\BootstrapLabelExtension;

/**
 * BootstrapLabelExtensionTest
 *
 * @category   Test
 * @package    BcBootstrapBundle
 * @subpackage Twig
 * @author     Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright  2012-2013 Florian Eckerstorfer
 * @license    http://opensource.org/licenses/MIT The MIT License
 * @link       http://bootstrap.braincrafted.com Bootstrap for Symfony2
 * @group      unit
 */
class BootstrapLabelExtensionTest extends \PHPUnit_Framework_TestCase
{
    /** @var BootstrapLabelExtension */
    private $extension;

    /**
     * @return void
     */
    public function setUp()
    {
        $this->extension = new BootstrapLabelExtension();
    }

    /**
     * @covers Bc\Bundle\BootstrapBundle\Twig\BootstrapLabelExtension::labelFilter
     */
    public function testLabelFilter()
    {
        $this->assertEquals(
            '<span class="label">Hello World</span>',
            $this->extension->labelFilter('Hello World'),
            '->labelFilter() returns the HTML code for the given label.'
        );
        $this->assertEquals(
            '<span class="label label-success">Hello World</span>',
            $this->extension->labelFilter('Hello World', 'success'),
            '->labelFilter() returns the HTML code for the given success label.'
        );
    }

    /**
     * @covers Bc\Bundle\BootstrapBundle\Twig\BootstrapLabelExtension::labelSuccessFilter
     */
    public function testLabelSuccessFilter()
    {
        $this->assertEquals(
            '<span class="label label-success">Foobar</span>',
            $this->extension->labelSuccessFilter('Foobar')
        );
    }

    /**
     * @covers Bc\Bundle\BootstrapBundle\Twig\BootstrapLabelExtension::labelWarningFilter
     */
    public function testLabelWarningFilter()
    {
        $this->assertEquals(
            '<span class="label label-warning">Foobar</span>',
            $this->extension->labelWarningFilter('Foobar')
        );
    }

    /**
     * @covers Bc\Bundle\BootstrapBundle\Twig\BootstrapLabelExtension::labelImportantFilter
     */
    public function testLabelImportantFilter()
    {
        $this->assertEquals(
            '<span class="label label-important">Foobar</span>',
            $this->extension->labelImportantFilter('Foobar')
        );
    }

    /**
     * @covers Bc\Bundle\BootstrapBundle\Twig\BootstrapLabelExtension::labelInfoFilter
     */
    public function testLabelInfoFilter()
    {
        $this->assertEquals(
            '<span class="label label-info">Foobar</span>',
            $this->extension->labelInfoFilter('Foobar')
        );
    }

    /**
     * @covers Bc\Bundle\BootstrapBundle\Twig\BootstrapLabelExtension::labelInverseFilter
     */
    public function testLabelInverseFilter()
    {
        $this->assertEquals(
            '<span class="label label-inverse">Foobar</span>',
            $this->extension->labelInverseFilter('Foobar')
        );
    }

    /**
     * @covers Bc\Bundle\BootstrapBundle\Twig\BootstrapLabelExtension::getFilters
     */
    public function testGetFilters()
    {
        $filters = $this->extension->getFilters();
        $this->assertCount(6, $filters, '->getFilters() returns 2 filters.');
        $this->assertTrue(isset($filters['label']), '->getFilters() returns "label" filter.');
        $this->assertTrue(isset($filters['label_success']), '->getFilters() returns "label_success" filter.');
        $this->assertTrue(isset($filters['label_warning']), '->getFilters() returns "label_warning" filter.');
        $this->assertTrue(isset($filters['label_important']), '->getFilters() returns "label_important" filter.');
        $this->assertTrue(isset($filters['label_info']), '->getFilters() returns "label_info" filter.');
        $this->assertTrue(isset($filters['label_inverse']), '->getFilters() returns "label_inverse" filter.');
    }

    /**
     * @covers Bc\Bundle\BootstrapBundle\Twig\BootstrapLabelExtension::getName
     */
    public function testGetName()
    {
        $this->assertEquals('bootstrap_label_extension', $this->extension->getName(), '->getName() returns the name.');
    }
}
