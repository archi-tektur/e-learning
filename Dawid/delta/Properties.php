<?php


/**
 * Properties
 */
class Properties
{
    private $a;
    private $b;
    private $c;

    //region Accessors

    /**
     * @return mixed
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @param mixed $a
     * @return Properties
     */
    public function setA($a)
    {
        $this->a = $a;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @param mixed $b
     * @return Properties
     */
    public function setB($b)
    {
        $this->b = $b;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getC()
    {
        return $this->c;
    }

    /**
     * @param mixed $c
     * @return Properties
     */
    public function setC($c)
    {
        $this->c = $c;
        return $this;
    }

    //endregion

    public function isValid()
    {
        return is_numeric($this->a) && is_numeric($this->b) && is_numeric($this->c);
    }
}
