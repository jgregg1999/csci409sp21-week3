<?php
/**
 * MyClass File Doc Comment
 *
 * @category MyClass
 * @package  MyPackage
 * @author   Jennifer Gregg <jgregg@coastal.edu>
 * @license  License Name
 * @link     link
 */

/**
 * Shape.php
 *
 * @category Class
 * @package  MyPackage
 * @author   Jennifer Gregg <jgregg@coastal.edu>
 * @license  Licence Name
 * @link     link
 */

class Rectangle extends Shape
{
    const SHAPE_TYPE = 2;
    /**
     * Description
     *
     * @return bool
     */
    public function getFullDescription()
    {
        return "Rectangle<#" . $this->_id . ">: " . $this->name . " - " . $this->length . " x " . $this->width;
    }
}

?>
