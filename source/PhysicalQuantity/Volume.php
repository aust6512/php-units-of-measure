<?php
namespace PhpUnitsOfMeasure\PhysicalQuantity;

use PhpUnitsOfMeasure\AbstractPhysicalQuantity;
use PhpUnitsOfMeasure\UnitOfMeasure;

class Volume extends AbstractPhysicalQuantity
{
    protected static $unitDefinitions;

    protected static function initialize()
    {
        // Cubic meter
        $cubicmeter = UnitOfMeasure::nativeUnitFactory('m^3');
        $cubicmeter->addAlias('m³');
        $cubicmeter->addAlias('cubic meter');
        $cubicmeter->addAlias('cubic meters');
        $cubicmeter->addAlias('cubic metre');
        $cubicmeter->addAlias('cubic metres');
        static::addUnit($cubicmeter);

        // Cubic millimeter
        $newUnit = UnitOfMeasure::linearUnitFactory('mm^3', 1e-9);
        $newUnit->addAlias('mm³');
        $newUnit->addAlias('cubic millimeter');
        $newUnit->addAlias('cubic millimeters');
        $newUnit->addAlias('cubic millimetre');
        $newUnit->addAlias('cubic millimetres');
        static::addUnit($newUnit);

        // Cubic centimeter
        $newUnit = UnitOfMeasure::linearUnitFactory('cm^3', 1e-6);
        $newUnit->addAlias('cm³');
        $newUnit->addAlias('cubic centimeter');
        $newUnit->addAlias('cubic centimeters');
        $newUnit->addAlias('cubic centimetre');
        $newUnit->addAlias('cubic centimetres');
        static::addUnit($newUnit);

        // Cubic decimeter
        $newUnit = UnitOfMeasure::linearUnitFactory('dm^3', 1e-3);
        $newUnit->addAlias('dm³');
        $newUnit->addAlias('cubic decimeter');
        $newUnit->addAlias('cubic decimeters');
        $newUnit->addAlias('cubic decimetre');
        $newUnit->addAlias('cubic decimetres');
        static::addUnit($newUnit);

        // Cubic kilometer
        $newUnit = UnitOfMeasure::linearUnitFactory('km^3', 1e9);
        $newUnit->addAlias('km³');
        $newUnit->addAlias('cubic kilometer');
        $newUnit->addAlias('cubic kilometers');
        $newUnit->addAlias('cubic kilometre');
        $newUnit->addAlias('cubic kilometres');
        static::addUnit($newUnit);

        // Cubic foot
        $newUnit = UnitOfMeasure::linearUnitFactory('ft^3', 2.831685e-2);
        $newUnit->addAlias('ft³');
        $newUnit->addAlias('cubic foot');
        $newUnit->addAlias('cubic feet');
        static::addUnit($newUnit);

        // Cubic inch
        $newUnit = UnitOfMeasure::linearUnitFactory('in^3', 1.638706e-5);
        $newUnit->addAlias('in³');
        $newUnit->addAlias('cubic inch');
        $newUnit->addAlias('cubic inches');
        static::addUnit($newUnit);

        // Cubic yard
        $newUnit = UnitOfMeasure::linearUnitFactory('yd^3', 7.645549e-1);
        $newUnit->addAlias('yd³');
        $newUnit->addAlias('cubic yard');
        $newUnit->addAlias('cubic yards');
        static::addUnit($newUnit);

        // Milliliters
        $newUnit = UnitOfMeasure::linearUnitFactory('ml', 1e-6);
        $newUnit->addAlias('milliliter');
        $newUnit->addAlias('milliliters');
        $newUnit->addAlias('millilitre');
        $newUnit->addAlias('millilitres');
        static::addUnit($newUnit);

        // Centiliters
        $newUnit = UnitOfMeasure::linearUnitFactory('cl', 1e-5);
        $newUnit->addAlias('centiliter');
        $newUnit->addAlias('centiliters');
        $newUnit->addAlias('centilitre');
        $newUnit->addAlias('centilitres');
        static::addUnit($newUnit);

        // Deciliter
        $newUnit = UnitOfMeasure::linearUnitFactory('dl', 1e-4);
        $newUnit->addAlias('deciliter');
        $newUnit->addAlias('deciliters');
        $newUnit->addAlias('decilitre');
        $newUnit->addAlias('decilitres');
        static::addUnit($newUnit);

        // Liter
        $newUnit = UnitOfMeasure::linearUnitFactory('l', 1e-3);
        $newUnit->addAlias('liter');
        $newUnit->addAlias('liters');
        $newUnit->addAlias('litre');
        $newUnit->addAlias('litres');
        static::addUnit($newUnit);

        // Decaliter
        $newUnit = UnitOfMeasure::linearUnitFactory('dal', 1e-2);
        $newUnit->addAlias('decaliter');
        $newUnit->addAlias('decaliters');
        $newUnit->addAlias('decalitre');
        $newUnit->addAlias('decalitres');
        static::addUnit($newUnit);

        // Hectoliter
        $newUnit = UnitOfMeasure::linearUnitFactory('hl', 1e-1);
        $newUnit->addAlias('hectoliter');
        $newUnit->addAlias('hectoliters');
        $newUnit->addAlias('hectolitre');
        $newUnit->addAlias('hectolitres');
        static::addUnit($newUnit);

        // Cup
        $newUnit = UnitOfMeasure::linearUnitFactory('cup', 2.365882e-4);
        $newUnit->addAlias('cup');
        $newUnit->addAlias('cups');
        $newUnit->addAlias('1');
        static::addUnit($newUnit);

        // teaspoon
        $newUnit = UnitOfMeasure::linearUnitFactory('tsp', 0.00000492892);
        $newUnit->addAlias('teaspoon');
        $newUnit->addAlias('teaspoons');
        $newUnit->addAlias('24');
        static::addUnit($newUnit);

        // tablespoon
        $newUnit = UnitOfMeasure::linearUnitFactory('tbsp', 0.00001478676);
        $newUnit->addAlias('tablespoon');
        $newUnit->addAlias('tablespoons');
        $newUnit->addAlias('6');
        static::addUnit($newUnit);

        // Gallon
        $newUnit = UnitOfMeasure::linearUnitFactory('gal', 3.7854118e-3);
        $newUnit->addAlias('gallon');
        $newUnit->addAlias('gallons');
        $newUnit->addAlias('us gal');
        static::addUnit($newUnit);
        // Quart
        $newUnit = UnitOfMeasure::linearUnitFactory('qt', 9.4635295e-4);
        $newUnit->addAlias('quart');
        $newUnit->addAlias('quarts');
        $newUnit->addAlias('qts');
        $newUnit->addAlias('liq qt');
        static::addUnit($newUnit);
        // Fluid Ounce
        $newUnit = UnitOfMeasure::linearUnitFactory('fl oz', 2.957353e-5);
        $newUnit->addAlias('fluid ounce');
        $newUnit->addAlias('fluid ounces');
        $newUnit->addAlias('fluid oz');
        $newUnit->addAlias('fl. oz.');
        $newUnit->addAlias('oz. fl.');
        $newUnit->addAlias('2');
        static::addUnit($newUnit);
        // Pint
        $newUnit = UnitOfMeasure::linearUnitFactory('pt', 4.73176475e-4);
        $newUnit->addAlias('pint');
        $newUnit->addAlias('pints');
        $newUnit->addAlias('liq pt');
        $newUnit->addAlias('7');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('quinoa oz', 5.9147053176475e-5);
        $newUnit->addAlias('8');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('packet', 0.00001478676 * 2);
        $newUnit->addAlias('10');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('small bunch', 1.18291e-4);
        $newUnit->addAlias('11');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('large bunch', 1.5969285e-3);
        $newUnit->addAlias('12');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('head of lettuce', 2.365882e-4 * 4);
        $newUnit->addAlias('17');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('broccoli crown', 2.365882e-4);
        $newUnit->addAlias('18');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('carrots', 2.365882e-4 / 2);
        $newUnit->addAlias('19');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('celery stalks', 2.365882e-4 / 2);
        $newUnit->addAlias('20');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('onion', 2.365882e-4 / 2);
        $newUnit->addAlias('21');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('radish', 2.365882e-4 / 12);
        $newUnit->addAlias('22');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('pepper', 2.365882e-4 / 2);
        $newUnit->addAlias('23');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('garlic clove', 0.00000492892 / 2);
        $newUnit->addAlias('28');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('sugar lb', 2.365882e-4 * 2.25 );
        $newUnit->addAlias('30');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('cheese ounce', 2.365882e-4 * 2.67 * 2 );
        $newUnit->addAlias('31');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('frozen vegetables ounce', 2.365882e-4 * 6.67 );
        $newUnit->addAlias('32');
        static::addUnit($newUnit);
        
        $newUnit = UnitOfMeasure::linearUnitFactory('med tomato', 2.365882e-4 );
        $newUnit->addAlias('34');
        static::addUnit($newUnit);
        
        $newUnit = UnitOfMeasure::linearUnitFactory('sunflower seeds oz', 2.365882e-4 / 7 * 2.5 );
        $newUnit->addAlias('35');
        static::addUnit($newUnit);
        
        $newUnit = UnitOfMeasure::linearUnitFactory('cucumber', 2.365882e-4 * 1.5 );
        $newUnit->addAlias('36');
        static::addUnit($newUnit);
        
        $newUnit = UnitOfMeasure::linearUnitFactory('bag, salad 10oz', 2.365882e-4 * 12.5 );
        $newUnit->addAlias('37');
        static::addUnit($newUnit);
    }
}
