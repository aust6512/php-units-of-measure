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
        
        $newUnit = UnitOfMeasure::linearUnitFactory('sweet potato', 4.5359237e-1 / 4);
        $newUnit->addAlias('29');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('8 oz can', 4.5359237e-1 / 16 * 8);
        $newUnit->addAlias('33');
        static::addUnit($newUnit);
        
        $newUnit = UnitOfMeasure::linearUnitFactory('fillet', 4.5359237e-1 / 16 * 4.5);
        $newUnit->addAlias('51');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('chicken breast', 4.5359237e-1 / 16 * 8);
        $newUnit->addAlias('56');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('chicken tender', 4.5359237e-1 / 16 * 2);
        $newUnit->addAlias('60');
        static::addUnit($newUnit);
        
        $newUnit = UnitOfMeasure::linearUnitFactory('slice bacon', 4.5359237e-1 / 16);
        $newUnit->addAlias('64');
        static::addUnit($newUnit);
        
        $newUnit = UnitOfMeasure::linearUnitFactory('jicama', 4.5359237e-1 / 2);
        $newUnit->addAlias('67');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('heart of palm', 4.5359237e-1 / 16 * 2);
        $newUnit->addAlias('68');
        static::addUnit($newUnit);
        
        $newUnit = UnitOfMeasure::linearUnitFactory('sausage link', 4.5359237e-1 / 4);
        $newUnit->addAlias('71');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('4 oz can', 4.5359237e-1 / 16 * 4);
        $newUnit->addAlias('80');
        static::addUnit($newUnit);
        
        $newUnit = UnitOfMeasure::linearUnitFactory('squash', 4.5359237e-1 / 4);
        $newUnit->addAlias('82');
        $newUnit->addAlias('98');
        static::addUnit($newUnit);
        
        $newUnit = UnitOfMeasure::linearUnitFactory('turnips', 4.5359237e-1 / 4);
        $newUnit->addAlias('84');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('eggplant', 4.5359237e-1);
        $newUnit->addAlias('85');
        static::addUnit($newUnit);
        
        $newUnit = UnitOfMeasure::linearUnitFactory('chile', 4.5359237e-1 / 8);
        $newUnit->addAlias('86');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('15 oz can', 4.5359237e-1 / 16 * 15);
        $newUnit->addAlias('87');
        static::addUnit($newUnit);
        
        $newUnit = UnitOfMeasure::linearUnitFactory('spear asparagus', 4.5359237e-1 / 20);
        $newUnit->addAlias('90');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('rib', 4.5359237e-1 / 4);
        $newUnit->addAlias('93');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('tortilla', 4.5359237e-1 / 16);
        $newUnit->addAlias('97');
        static::addUnit($newUnit);
        
        $newUnit = UnitOfMeasure::linearUnitFactory('squash', 4.5359237e-1 / 3);
        $newUnit->addAlias('98');
        static::addUnit($newUnit);
     
        $newUnit = UnitOfMeasure::linearUnitFactory('corn taco shell', 4.5359237e-1 / 16 / 4);
        $newUnit->addAlias('99');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('12 oz bag', 4.5359237e-1 * 12 / 16);
        $newUnit->addAlias('100');
        static::addUnit($newUnit);

        

        $newUnit = UnitOfMeasure::linearUnitFactory('16 oz jar', 4.5359237e-1 / 16 * 16);
        $newUnit->addAlias('101');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('12 oz jar', 4.5359237e-1 / 16 * 12);
        $newUnit->addAlias('102');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('24 oz jar', 4.5359237e-1 / 16 * 24);
        $newUnit->addAlias('103');
        static::addUnit($newUnit);
    }
}
