<?php
    
    class DBManager{
        private string $dbName;
        private string $host;
        private string $userName;
        private string $password;
        public mysqli $conn;

        function __construct(string $dbName, string $host = "localhost", string $userName = "root", string $password = ""){
            $this->dbName = $dbName;
            $this->host = $host;
            $this->userName = $userName;
            $this->password = $password;

            $this->conn = $this->establishConnection();

            if(!$this->conn){
                throw new Exception("Invalid Connection");
            }
        }

        private function establishConnection(){
            return mysqli_connect($this->host, $this->userName, $this->password, $this->dbName);
        }

        private function doQuery(string $query, bool $fetch = false){
            $exe = mysqli_query($this->conn, $query);
            if($fetch && $exe){
                return mysqli_fetch_all($exe);
            }
            return $exe;
        }

        function insert(string $query){
            return $this->doQuery($query);
        }

        function select(string $query){
            return $this->doQuery($query, true);
        }

        function delete(string $query){
            return $this->doQuery($query);
        }

        function update(string $query){
            return $this->doQuery($query);
        }
    }

?>