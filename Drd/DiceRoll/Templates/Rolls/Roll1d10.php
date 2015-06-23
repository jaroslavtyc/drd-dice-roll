<?php
namespace Drd\DiceRoll\Templates\Rolls;

use Drd\DiceRoll\DiceRollBuilder;
use Drd\DiceRoll\Roll;
use Drd\DiceRoll\Templates\Dices\Dice1d10;
use Drd\DiceRoll\Templates\Evaluators\OneToOneEvaluator;
use Drd\DiceRoll\Templates\RollOn\NoRollOn;
use Granam\Integer\IntegerObject;

class Roll1d10 extends Roll
{
    public function __construct()
    {
        $noRollOn = new NoRollOn();
        parent::__construct(
            new Dice1d10(),
            new IntegerObject(1),
            new DiceRollBuilder(new OneToOneEvaluator()),
            $noRollOn,
            $noRollOn
        );
    }
}
