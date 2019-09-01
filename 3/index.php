<?php

class Rectangle
{
    protected $width;
    protected $height;

    /**
     * @return mixed
     */
    public function getWidth() : array
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}

class Square extends Rectangle {

    public function setHeight($height)
    {
        $this->width = $height;
        $this->height = $height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
        $this->height = $width;
    }

}

$shape = new Rectangle();
$shape->setWidth(4);
$shape->setHeight(5);
echo $shape->area();
echo "<br>";
$shape2 = new Square();
$shape2->setHeight(5);
$shape2->setWidth(4);
echo $shape2->area();