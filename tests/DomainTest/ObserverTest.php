<?php
namespace DomainTest;

use Domain\Newspaper;
use Domain\Reader;

class ObserverTest extends \PHPUnit_Framework_TestCase
{
    public function testAbc()
    {
        $newspaper = new Newspaper('Newyork Times');

        $allen = new Reader('Allen');
        $jim   = new Reader('Jim');
        $linda = new Reader('Linda');

        //add reader
        $newspaper->attach($allen);
        $newspaper->attach($jim);
        $newspaper->attach($linda);

        //remove reader
        $newspaper->detach($linda);

        //set break outs
        $newspaper->breakOutNews('USA break down!');
    }
}