<?php
/**
 * Created by PhpStorm.
 * User: oleg
 * Date: 03.07.2017
 * Time: 23:35
 *
 * Example pattern Prototype
 *
 */
class Sea{}
class EarthSea extends Sea{}
class MarsSea extends Sea {}

class Plains {}
class EarthPlains extends Plains{}
class MarsPlains extends Plains {}

class Forest {}
class EarthForest extends Forest{}
class MarsForest extends Forest {}

class TerrainFactory {
    private $sea;
    private $forest;
    private $plaints;

    function __construct(Sea $sea,Forest $forest,Plains $plains)
    {
        $this->forest = $forest;
        $this->sea = $sea;
        $this->plaints = $plains;
    }

    function getSea(){
        return clone $this->sea;
    }

    function getForest(){
        return clone $this->forest;
    }

    function getPlaints(){
        return clone $this->plaints;
    }
}

$factory = new TerrainFactory(new EarthSea(),new EarthForest(), new EarthPlains());

print_r($factory->getForest());
print_r($factory->getPlaints());
print_r($factory->getSea());