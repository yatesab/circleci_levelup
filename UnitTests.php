<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * Class UnitTests
 */
class UnitTests extends TestCase
{

    /** @var DateTime $testData */
    public $testData = null;

    public $dateTimeString = "1-1-2019 05:00:00";

    /**
     * @throws Exception
     */
    public function setUp() : void
    {
        parent::setUp();

        //Setup some data here for the tests
        $this->testData = new DateTime($this->dateTimeString);
    }

    /**
     * @throws Exception
     */
    public function testThisWillWork() {
        $newDateTime = new DateTime($this->dateTimeString);

        self::assertEquals($newDateTime, $this->testData);
    }

    /**
     * @throws Exception
     */
    public function testThisWillNotWork() {
        self::assertEquals("random data", $this->testData);
    }

}
