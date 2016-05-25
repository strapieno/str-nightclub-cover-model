<?php
namespace Strapieno\NightClubCover\ModelTest\Entity;

use Strapieno\NightClubCover\Model\Entity\CoverAwareTrait;

/**
 * Class CoverAwareTraitTest
 */
class CoverAwareTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var CoverAwareTrait
     */
    protected $mockTrait;

    public function setUp()
    {
        $this->mockTrait = $this->getMockForTrait('Strapieno\NightClubCover\Model\Entity\CoverAwareTrait');
    }

    public function testGetterSetter()
    {
        $input = 'test';
        $this->mockTrait->setCover($input);
        $this->assertSame($input, $this->mockTrait->getCover());
    }
}