<?php
declare(strict_types=1);

require_once __DIR__ . '/SomeTraitA.php';
require_once __DIR__ . '/SomeTraitB.php';

class SomeClass
{
    use SomeTraitA, SomeTraitB {
        SomeTraitB::traitMethod insteadof SomeTraitA;
        SomeTraitA::traitMethod as setA;
    }

    public function setTraitProperty()
    {
        $this->traitMethod(null, null);
        echo $this->traitProperty . PHP_EOL;
        $this->setA(null, null);
        echo $this->traitProperty . PHP_EOL;
    }
}

$someClass = new SomeClass();
$someClass->setTraitProperty(); // 'B''A'
