<?php

class Clock
{

    private $time;

    /**
     * Create clock from hour / minute input
     * @param $hour
     * @param $minute
     */
    public function __construct($hour = 0, $minute = 0)
    {
        $this->time = new DateTime();
        $this->time->setTime($hour, $minute);
    }

    /**
     * @return string - magic method formatted time
     */
    public function __toString()
    {
        return (string)$this->time->format('H:i');
    }

    /**
     * Add minutes to clock
     * @param $m
     */
    public function add($m)
    {
        $this->time->add(new DateInterval("PT{$m}M"));
        return $this;
    }

    /**
     * Subtract minutes from clock
     * @param $m
     */
    public function sub($m)
    {
        $this->time->sub(new DateInterval("PT{$m}M"));
        return $this;
    }


}