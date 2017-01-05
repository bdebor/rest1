<?php

namespace KnpU\CodeBattle\Api;

use Symfony\Component\HttpFoundation\Response;

/**
 * A wrapper for holding data to be used for a application/problem+json response
 */
class ApiProblem
{
    const TYPE_VALIDATION_ERROR = 'validation_error';

    private $statusCode;

    private $type;

    private $title;

    private $extraData = array();

    public function __construct($statusCode, $type, $title)
    {
        $this->statusCode = $statusCode;
        $this->type = $type;
        $this->title = $title;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function set($name, $value)
    {
        $this->extraData[$name] = $value;
    }

    public function toArray()
    {
        return array_merge(
            $this->extraData,
            [
                'status' => $this->statusCode,
                'type' => $this->type,
                'title' => $this->title,
            ]
        );
    }



}