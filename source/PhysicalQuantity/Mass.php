<?php
namespace PhpUnitsOfMeasure\PhysicalQuantity;

use PhpUnitsOfMeasure\AbstractPhysicalQuantity;
use PhpUnitsOfMeasure\UnitOfMeasure;
use PhpUnitsOfMeasure\HasSIUnitsTrait;

class Mass extends AbstractPhysicalQuantity
{
    use HasSIUnitsTrait;

    protected static $unitDefinitions;

    protected static function initialize()
    {
        // Kilogram
        $kilogram = UnitOfMeasure::nativeUnitFactory('kg');
        $kilogram->addAlias('kilogram');
        $kilogram->addAlias('kilograms');
        static::addUnit($kilogram);

        static::addMissingSIPrefixedUnits(
            $kilogram,
            1e-3,
            '%pg',
            [
                '%Pgram',
                '%Pgrams',
            ]
        );

        // Tonne (metric)
        $newUnit = UnitOfMeasure::linearUnitFactory('t', 1e3);
        $newUnit->addAlias('ton');
        $newUnit->addAlias('tons');
        $newUnit->addAlias('tonne');
        $newUnit->addAlias('tonnes');
        static::addUnit($newUnit);

        // Pound
        $newUnit = UnitOfMeasure::linearUnitFactory('lb', 4.5359237e-1);
        $newUnit->addAlias('lbs');
        $newUnit->addAlias('pound');
        $newUnit->addAlias('pounds');
        $newUnit->addAlias('9');
        static::addUnit($newUnit);

        // Ounce
        $newUnit = UnitOfMeasure::linearUnitFactory('oz', 4.5359237e-1 / 16);
        $newUnit->addAlias('ounce');
        $newUnit->addAlias('ounces');
        $newUnit->addAlias('3');
        static::addUnit($newUnit);

        // Stone
        $newUnit = UnitOfMeasure::linearUnitFactory('st', 4.5359237e-1 * 14);
        $newUnit->addAlias('stone');
        $newUnit->addAlias('stones');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('10 oz can', 4.5359237e-1 / 16 * 10);
        $newUnit->addAlias('13');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('13.5 oz can', 4.5359237e-1 / 16 * 13.5);
        $newUnit->addAlias('14');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('14.5 oz can', 4.5359237e-1 / 16 * 14.5);
        $newUnit->addAlias('15');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('15.5 oz can', 4.5359237e-1 / 16 * 15.5);
        $newUnit->addAlias('16');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('6 oz can', 4.5359237e-1 / 16 * 6);
        $newUnit->addAlias('25');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('14 oz can', 4.5359237e-1 / 16 * 14);
        $newUnit->addAlias('26');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('7 oz can', 4.5359237e-1 / 16 * 7);
        $newUnit->addAlias('27');
        $newUnit->addAlias('7 oz can');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('8 oz can', 4.5359237e-1 / 16 * 8);
        $newUnit->addAlias('33');
        static::addUnit($newUnit);
    }
}
