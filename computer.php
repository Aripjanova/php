<?php
class Computer
{
    private $id;
    private $cpu;
    private $ram;
    private $video;
    private $motherboard;
    private $compType;

    function __construct($id, $cpu, $ram, $video, $motherboard, $compType)
    {
        $this->id = $id;
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->video = $video;
        $this->motherboard = $motherboard;
        $this->compType = $compType;
    }

    function getId()
    {
        return $this->id;
    }

    function getCpu()
    {
        return $this->cpu;
    }

    function getRam()
    {
        return $this->ram;
    }

    function getVideo()
    {
        return $this->video;
    }

    function getMotherboard()
    {
        return $this->motherboard;
    }

    function getCompType()
    {
        return $this->compType;
    }
}
?>