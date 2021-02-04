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
class Shape
// private
{
    const SHAPE_TYPE = 1;
    public $name;
    protected $length;
    protected $width;
    protected $_id;

    /**
     * Constructor to allocate an instance and initialize its private variables.
     *
     * @param number $length : length of shape.
     * @param number $width  : width of shape.
     */
    function __construct($length = 0, $width = 0)
    {
        $this->length = $length;
        $this->width = $width;
        $this->_id= uniqid();
    }
    /**
     * Getter for name.
     *
     * @return number: name
     */
    function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @param mixed $name : sets the name
     *
     * @return no return
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Getter method for id property
     *
     * @return string
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Return the area of the shape.
     *
     * @return number: area of the shape.
     */
    public function getArea()
    {
        return $this->length * $this->width;

    }
    /**
     * Return type description
     *
     * @return string
     */
    static public function getTypeDescription()
    {
        return "Type: " . self::SHAPE_TYPE;
    }

    /**
     * Description
     *
     * @return bool
     */
    public function getFullDescription()
    {
        return "Shape<#" . $this->_id . ">: " . $this->name . " - " . $this->length . " x " . $this->width;
    }

}
?>
