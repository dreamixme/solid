<?php

class Order
{
    protected $items;
    protected $outputDriver;

    public function __construct($items ,OrderOutputInterface $output)
    {
        $this->items = $items;
        $this->outputDriver = $output;
    }

    public function calculateTotalSum()
    {
        return array_sum($this->getItems()) * .2;
    }
    public function getItemsPrice()
    {
        // get price from items
        return [10,20,54];
    }

    public function format()
    {
        return $this->outputDriver->output([
            'price' => $this->calculateTotalSum()
        ]);
    }
}

class OrderRepository
{
    public function load($orderID)
    {

    }
    public function save($order)
    {

    }
    public function update($order)
    {

    }
    public function delete($order)
    {

    }
}

interface OrderOutputInterface
{
    public function output($order);
}


class HtmlOutput implements OrderOutputInterface
{
    public function output($order)
    {
        return "<h2>Sum Your Order : {$order->totalPrice}</h2>";
    }
}

class JsonOutput implements OrderOutputInterface
{
    public function output($order)
    {
        return json_encode($order);
    }
}

class Html2Output implements OrderOutputInterface
{
    public function output($order)
    {
        return "<h3></h3>";
    }
}

$order = new Order(['item1' , 'item2'],new Html2Output());

$orderRepo = new OrderRepository();
$orderRepo->save($order);

$order->format();