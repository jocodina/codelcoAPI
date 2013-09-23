<?php

class pqdb {

    var $result;
    var $user;
    var $pass;
    var $dbname;
    var $host;
    var $dbh;

// ==================================================================
//	DB Constructor
    function pqdb($dbuser, $dbpass, $dbname, $dbhost) {
        $this->user = $dbuser;
        $this->pass = $dbpass;
        $this->dbname = $dbname;
        $this->host = $dbhost;
        $this->start();
    }

    function start() {
        $this->dbh = mysql_connect($this->host, $this->user, $this->pass, true);
        if (!$this->dbh) {
            echo ('Error mysql_connect: ' . mysql_error());
        }
        if (!mysql_select_db($this->dbname, $this->dbh)) {
             echo ('Error mysql_select_db: ' . mysql_error());
        }
        
    }
    function query($query) {

        $this->result = @mysql_query($query, $this->dbh);
        if (!$this->result){
             echo ('Error mysql_query: ' . mysql_error());
        }
    }
    function get_results($query) {
        $this->query($query);
        $valor = array();
        while ($row = @mysql_fetch_object($this->result)) {
            $valor[] = $row;
        }
        return $valor;
    }

    function close(){
        mysql_close($this->dbh);
    }
}

//end class
?>