<?php
namespace Drd\Tests\DiceRoll\Templates\RollOn;

use Drd\DiceRoll\Templates\RollOn\RollOn2;

class RollOn2Test extends AbstractRollOnTest
{

    /**
     * @test
     */
    public function I_get_agreement_on_two()
    {
        $rollOn2 = new RollOn2($this->createRoller());
        for ($value = -1; $value < 6; $value++) {
            $this->assertSame($value === 2, $rollOn2->shouldHappen($value));
        }
        $this->assertFalse($rollOn2->shouldHappen(PHP_INT_MIN));
        $this->assertFalse($rollOn2->shouldHappen(PHP_INT_MAX));
    }

}