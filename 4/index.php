<?php

interface Codeable
{
    public function code();
}

interface Testable
{
    public function test();
}

class Programmer implements Codeable , Testable
{
    public function code()
    {
        return 'coding';
    }

    public function test()
    {
        return 'testing';
    }
}

class Tester implements Testable
{
    public function test()
    {
        return 'testing';
    }
}

class ProjectManagement
{
    public function processCode(Codeable $member)
    {
        return $member->code();
    }

    public function processTest(Testable $member)
    {
        return $member->test();
    }
}


$pm = new ProjectManagement();
echo $pm->processCode(new Programmer());
echo "<br>";
echo $pm->processTest(new Tester());