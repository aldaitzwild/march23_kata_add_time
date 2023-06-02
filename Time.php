<?php

class Time
{
    private int $hours;
    private int $minutes;
    private int $seconds;

    public function __construct(array $time)
    {
        $this->hours = $time['hours'];
        $this->minutes = $time['minutes'];
        $this->seconds = $time['seconds'];
    }

    public function addHours(int $nbHour) {
        $this->hours += $nbHour;
        if($this->hours >= 24)
            $this->hours = 0;
    }

    public function addMinutes(int $nbMinute) {
        $this->minutes += $nbMinute;
        if($this->minutes >= 60) {
            $this->minutes = 0;
            $this->addHours(1);
        }
    }

    public function addSeconds(int $nbSeconds) {
        $this->seconds += $nbSeconds;
        if($this->seconds >= 60) {
            $this->seconds = 0;
            $this->addMinutes(1);
        }
    }

    public function toArray() {
        return [
            'hours' => $this->hours, 
            'minutes'=> $this->minutes, 
            'seconds' => $this->seconds
        ];
    }
}