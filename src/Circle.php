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

class Circle extends Shape
{
    const SHAPE_TYPE = 3;
    protected $radius;
    /**
     * Description
     *
     * @param number $radius : radius
     */
    public function __construct( $radius )
    {
        parent::__construct(0, 0);
        $this->radius = $radius;
        $this->_id = uniqid();
    }
    /**
     * Description
     *
     * @return number
     */
    public function area()
    {
        return M_PI * $this->radius * $this->radius;
    }
    /**
     * Description
     *
     * @return bool
     */
    public function getFullDescription()
    {
        return "Circle<#" . $this->_id . ">: " . $this->name . " - " . $this->radius;
    }
}

?>
