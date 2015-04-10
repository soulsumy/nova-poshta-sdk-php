<?php

namespace NovaPoshta\MethodParameters;

/**
 * Параметры метода getCounterparties модели Counterparty
 *
 * Class Address_getStreet
 * @package NovaPoshta\DataMethods
 * @property string CounterpartyProperty
 * @property string Page
 * @property string FindByString
 * @property string CityRef
 */
class Counterparty_getCounterparties extends MethodParameters
{
    /**
     * Устанавливает свойство контрагента
     *
     * @param $value
     * @return $this
     */
    public function setCounterpartyProperty($value)
    {
        $this->CounterpartyProperty = $value;
        return $this;
    }

    /**
     * Получить свойство контрагента
     *
     * @return string
     */
    public function getCounterpartyProperty()
    {
        return $this->CounterpartyProperty;
    }

    /**
     * Устанавливает страницу
     *
     * @param $value
     * @return $this
     */
    public function setPage($value)
    {
        $this->Page = $value;
        return $this;
    }

    /**
     * Получить страницу
     *
     * @return string
     */
    public function getPage()
    {
        return $this->Page;
    }

    /**
     * Устанавливает строку для поиска контрагента
     *
     * @param $value
     * @return $this
     */
    public function setFindByString($value)
    {
        $this->FindByString = $value;
        return $this;
    }

    /**
     * Получить строку для поиска контрагента
     *
     * @return string
     */
    public function getFindByString()
    {
        return $this->FindByString;
    }

    /**
     * Устанавливает реф города
     *
     * @param $value
     * @return $this
     */
    public function setCityRef($value)
    {
        $this->CityRef = $value;
        return $this;
    }

    /**
     * Получить реф города
     *
     * @return string
     */
    public function getCityRef()
    {
        return $this->CityRef;
    }
}