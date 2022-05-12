<?php
class carte
{
    private $ref = null;
    private $client = null;
    private $nbpoint = null;
    private $offre;

    function __construct(int $nbpoint)
    {
        $this->nbpoint = $nbpoint;
    }

    function getRef(): int
    {
        return $this->ref;
    }
    function getnbpoint(): int
    {
        return $this->nbpoint;
    }
}
