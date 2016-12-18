<?php
require('./test.php');
require('./Foo.class.php');
require('./fizzbuzz_2.php');
require_once ('./lib.php');
class FooTest extends PHPUnit_Framework_TestCase
{
    public function testEqual()
    {
    // 第1引数には期待される値
    // 第2引数には、テスト対象のメソッドを記述
    $this->assertEquals(0, 0);
    //$this->assertEquals(0, 1);
    }

    public function test_日本語でもOK() {
        $obj = new Foo();
        $test = $obj->test();
        $this->assertEquals(0, $test);
    }
    public function test_TestForFucntion() {
        $test = test();
        $this->assertEquals(1, $test);
    }

    public function test_1to100() {
        $ret = fizz(1, 100);
        $this->assertEquals(100, count($ret));
//        var_dump($ret);

    }

    public function test_fizz() {
        $result = check_fizz_buzz(3);
        $expected = "fizz";
        $this->assertEquals($expected, $result);
    }
    public function test_buzz() {
        $result = check_fizz_buzz(5);
        $expected = "buzz";
        $this->assertEquals($expected, $result);
    }
    public function test_fizzbuzz() {
        $result = check_fizz_buzz(15);
        $expected = "fizzbuzz";
        $this->assertEquals($expected, $result);
    }
    public function test_fizzbuzz_else() {
        $result = check_fizz_buzz(1);
        $expected = "1";
        $this->assertEquals($expected, $result);
    }
    public function test_fizzbuzz_for() {
        $result = spec_microtime_fizzbuzz_use_for();
        $expected_count = 10000;
        $expected_time = 3;
        $this->assertEquals($expected_count, $result['count']);
        $this->assertLessThan($expected_time, $result['microtime']);
    }
    public function test_fizzbuzz_array_reduce() {
        $result = spec_microtime_fizzbuzz_use_array_reduce();
        $expected_count = 10000;
        $expected_time = 10;
        $this->assertEquals($expected_count, $result['count']);
        $this->assertLessThan($expected_time, $result['microtime']);
    }
    public function test_fizzbuzz_max_limit() {
        $result = check_fizz_buzz(10000);
        $expected = "buzz";
        $this->assertEquals($expected, $result);
    }
 }
