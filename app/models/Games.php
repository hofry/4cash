<?php

class Games extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $userid;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $price;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $caseid;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $created_at;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $modified_in;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $item;

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Games[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Games
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }


    public function beforeCreate()
    {
        // Установить дату создания
        $this->created_at = date("Y-m-d H:i:s");
    }


    public function beforeUpdate()
    {
        // Установить дату модификации
        $this->modified_in = date("Y-m-d H:i:s");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'games';
    }

}
