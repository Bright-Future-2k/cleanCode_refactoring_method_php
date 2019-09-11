<?php
require __DIR__ . "cylinder.php";

class CylinderTest extends Cylinder
{

    public function testGetVolume0And0()
    {
        $radius = 0;
        $height = 0;
        $expected = 0;
        $cylinder = new Cylinder();
        $result = $cylinder->getVolume($radius, $height);
        $this->assertEquals($expected, $result);
    }


    public function testGetVolume1And2()
    {
        $radius = 1;
        $height = 2;
        $expected = 18.84955592153876;
        $cylinder = new Cylinder();
        $result = $cylinder->getVolume($radius, $height);
        $this->assertEquals($expected, $result);
    }
}