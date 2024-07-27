<?php

namespace NovaPoshta;
use NovaPoshta\Core\Logger\InterfaceLogger;

/**
 * Конфиг
 *
 * Class Config
 * @package NovaPoshta
 */
class Config
{
    /**
     * Формат данных в формате JSON
     */
    public const FORMAT_JSON = 'json';
    /**
     * Формат данных в формате JSONRPC2
     */
    public const FORMAT_JSONRPC2 = 'jsonrpc2';
    /**
     * Формат данных в формате XML
     */
    public const FORMAT_XML = 'xml';

    /**
     * Возврат данных на украинском языке
     */
    public const LANGUAGE_UA = 'ua';
    /**
     *  Возврат данных на русском языке, если это предусмотрено API Новой почты
     */
    public const LANGUAGE_RU = 'ru';
    /**
     * Возврат данных на английский языке, если это предусмотрено API Новой почты
     */
    public const LANGUAGE_EN = 'en';

    /**
     * @var string API ключ
     */
    protected static $apiKey = '';
    /**
     * @var string формат по умолчанию для передачи данных
     */
    protected static $format = self::FORMAT_JSONRPC2;
    /**
     * @var string язык по умолчанию для передачи данных
     */
    protected static $language = self::LANGUAGE_UA;
    /**
     * @var string URL API2
     */
    protected static $urlApi = 'https://api.novaposhta.ua/v2.0/';
    /**
     * @var string URL личного кабинета Новой Почты
     */
    protected static $urlMyNovaPoshta = 'https://my.novaposhta.ua';
    /**
     * @var int Максимальное время установления соединения с сервером
     */
    protected static $connectTimeout = 5;
    /**
     * @var int Максимальное время передачи ответа от сервера
     */
    protected static $timeout = 10;

    /**
     * @var InterfaceLogger
     */
    protected static $classLogger;

    /**
     * Возвращает API ключ
     *
     * @return string
     */
    public static function getApiKey()
    {
        return self::$apiKey;
    }

    /**
     * Устанавливает API ключ
     *
     * @param string $value
     */
    public static function setApiKey($value)
    {
        self::$apiKey = $value;
    }

    /**
     * Возвращает формат передачи данных
     *
     * @return string
     */
    public static function getFormat()
    {
        return self::$format;
    }

    /**
     * Устанавливает формат передачи данных
     *
     * @param string $value
     */
    public static function setFormat($value)
    {
        self::$format = $value;
    }

    /**
     * Возвращает язык для ответа с Новой почты
     *
     * @return string
     */
    public static function getLanguage()
    {
        return self::$language;
    }

    /**
     * Устанавливает язык для ответа с Новой почты
     *
     * @param string $value
     */
    public static function setLanguage($value)
    {
        self::$language = $value;
    }

    /**
     * Возвращает URL API2
     *
     * @return string
     */
    public static function getUrlApi()
    {
        return self::$urlApi . self::$format . '/';
    }

    /**
     * Возвращает URL кабинета Новой Почты
     *
     * @return string
     */
    public static function getUrlMyNovaPoshta()
    {
        return self::$urlMyNovaPoshta;
    }

    /**
     * Возвращает максимальное время установления соединения с сервером
     *
     * @return int
     */
    public static function getConnectTimeout()
    {
        return self::$connectTimeout;
    }

    /**
     * Устанавливает максимальное время установления соединения с сервером
     *
     * @param int $value
     * @return void
     */
    public static function setConnectTimeout($value)
    {
        self::$connectTimeout = $value;
    }

    /**
     * Возвращает максимальное время передачи ответа от сервера
     *
     * @return int
     */
    public static function getTimeout()
    {
        return self::$timeout;
    }

    /**
     * Устанавливает максимальное время передачи ответа от сервера
     *
     * @param int $value
     * @return void
     */
    public static function setTimeout($value)
    {
        self::$timeout = $value;
    }

    /**
     * Установить класс для логирования
     *
     * @param InterfaceLogger $logger
     */
    public static function setClassLogger(InterfaceLogger $logger)
    {
        self::$classLogger = $logger;
    }

    /**
     * Получить класс для логирования
     *
     * @return InterfaceLogger
     */
    public static function getClassLogger()
    {
        return self::$classLogger;
    }
}
