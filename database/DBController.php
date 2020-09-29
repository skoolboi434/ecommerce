<?php 

    class DBController {
        // DB Connection Properties
        protected $host = 'localhost';
        protected $user = 'admin_travis';
        protected $password = 'kickpush1';
        protected $database = 'ecommerce';

        // Connection Propert
        public $con = null;

        // Call Constructor
        public function __construct()
        {
            $this->con=mysqli_connect($this->host, $this->user, $this->password, $this->database);
            if($this->con->connect_error) {
                echo "Fail". $this->con->connect_error;
            }
        }

        public function __destruct()
        {
            $this->closeConnection();
        }
        
        // closing mysqli connection
        protected function closeConnection(){
            if($this->con!=null){
                $this->con->close();
                $this->con = null;
            }
        }
    }

    
