<?php 

    namespace App\Custom;

    class Random {
        
        public function generateHashNumber()
        {
            $bytes = random_bytes(5);
            return bin2hex($bytes);
        }
    }
