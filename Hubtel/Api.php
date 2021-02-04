<?php

    class ApiHost{
        private $auth;
        private $hostname;
        
        public function __construct($auth = null, $hostname = ""){
            $this->auth = $auth;
            $this->hostname = $hostname;
        }

        public function getAuth() {
            return $this->auth;
        }
    
        public function getHostname() {
            return $this->hostname;
        }
    }
?>