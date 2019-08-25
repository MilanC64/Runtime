<?php

    namespace Webops\Runtime;
    
    class Runtime
    {   
        //---------------------------------------------------------------------------------------------------------------------> Properties
        private $startTime;
        
        private $endTime;

        private $object;

        private $class;

        private $method;

        private $args;

        //---------------------------------------------------------------------------------------------------------------------> Setters
        
        public function setClass(string $fqClassName) :bool
        {
            $this->class = $fqClassName;
            return true;
        }
        
        public function getClass() :string
        {
            return $this->class;
        }

        /**
         * setStartTime
         *
         * @param [float] $startTime
         * @return boolean
         */
        public function setStartTime($startTime) :bool
        {
            $this->startTime = $startTime;
            return true;
        }

        /**
         * setEndTime
         *
         * @param [float] $endTime
         * @return boolean
         */
        public function setEndTime($endTime) :bool
        {
            $this->endTime = $endTime;
            return true;
        }

        /**
         * setClass
         *
         * @param [string] $class
         * @return boolean
         */
        public function setObject($object) :bool
        {
            $this->object = $object;
            return true;
        }

        /**
         * setMethod
         *
         * @param [string] $method
         * @return boolean
         */
        public function setMethod($method) :bool
        {
            $this->method = $method;
            return true;
        }

        /**
         * setArgs
         *
         * @param array $arguments
         * @return boolean
         */
        public function setArgs(array $arguments = null) :bool
        {
            if ($arguments != null) {
                $this->args = $arguments;
            }

            return true;
        }

        //---------------------------------------------------------------------------------------------------------------------> Getters
        /**
         * getStartTime
         *
         * @return float
         */
        public function getStartTime() :float
        {
            return $this->startTime;
        }

        /**
         * getEndTime
         *
         * @return float
         */
        public function getEndTime() :float
        {
            return $this->endTime;
        }

        /**
         * getClass
         *
         * @return string
         */
        public function getObject()
        {
            return $this->object;
        }
        
        /**
         * getMethod
         *
         * @return string
         */
        public function getMethod() :string
        {
            return $this->method;
        }

        /**
         * getArgs
         *
         * @return array
         */
        public function getArgs() :array
        {
            if(isset($this->args)){
                return $this->args;
            }

            return [];
        }

        //---------------------------------------------------------------------------------------------------------------------> Methods
        /**
         * sec
         *
         * @return float
         */    
        public function sec()
        {
            $result = bcsub((string) $this->endTime, (string) $this->startTime, 13);
            return $result;
        }

        /**
         * objMethodSec
         *
         * @return string
         */
        public function objMethodSec() :string
        {

            $object = $this->object;
        
            $startTime = microtime(true);

            if ($this->args != []) {
                $object->{$this->method}(... $this->args);
            } else {
                $object->{$this->method}();
            }

            $endTime = microtime(true);

            $execTime = bcsub($endTime, $startTime, 13);
            
            return $execTime;

        }

        /**
         * staticSec
         *
         * @return string
         */
        public function staticSec() :string
        {
            $startTime = microtime(true);

            if ($this->args != []) {
                $this->class::{$this->method}(... $this->args);
            } else {
                $this->class::{$this->method}();
            }

            $endTime = microtime(true);

            $execTime = bcsub($endTime, $startTime, 13);
            
            return $execTime;
        }

        /**
         * classMethodSec
         *
         * @return string
         */
        public function classMethodSec() :string
        {

            $object = new $this->class;

            $startTime = microtime(true);

            if ($this->args != []) {
                $object->{$this->method}(... $this->args);
            } else {
                $object->{$this->method}();
            }

            $endTime = microtime(true);

            $execTime = bcsub($endTime, $startTime, 13);
            
            return $execTime;
        }
    }