<?php

interface Workable
{
    public function work();
}

class Programmer implements Workable
{
    public function work()
    {
        return 'coding';
    }
}

class Tester implements Workable
{
    public function work()
    {
        return 'testing';
    }
}

class Developer implements Workable
{
    public function work()
    {
        return 'develop';
    }
}

class ProjectManagement
{
    public function process($member)
    {
        $member->work();
    }
}

$pm = new ProjectManagement();
$pg = new Programmer();
$ts = new Tester();
$dev = new Developer();


$pm->process($pg);
$pm->process($ts);
$pm->process($dev);