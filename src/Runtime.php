<?php
    namespace Webops\Runtime;
    
    class Runtime
    {
        private $startTime;
        private $endTime;

        public function setStartTime($startTime)
        {
            $this->startTime = $startTime;
            return true;
        }

        public function setEndTime($endTime)
        {
            $this->endTime = $endTime;
            return true;
        }

        public function getStartTime()
        {
            return $this->startTime;
        }

        public function getEndTime()
        {
            return $this->endTime;
        }

        public function sec()
        {
            echo $this->endTime - $this->startTime;
        }
    }