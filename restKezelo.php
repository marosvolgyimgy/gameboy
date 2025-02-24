<?php
    class RestKezelo
    {
        private $httpVersion="HTTP/1.1";

        public function sethttpFejlec($statusKod)
        {
            $statusUzenet=$this->gethttpStatusUzenet($tatusKod);

            header($this->httpVersion." ".$statusKod. " ".$statusUzenet);
            header("Content-Type: Application/json");
        }

        public function gethttpStatusUzenet($statusKod)
        {
            $httpStatus=array
            (
                200=>'OK',
                400=> 'Bad Request',
                404=> 'Not Found'
            );
            return ($httpStatus[$statusKod]);
        }
    }
?>