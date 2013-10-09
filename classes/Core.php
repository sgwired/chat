<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Core
 *
 * @author sheltong
 */
class Core {
    //put your code here
    protected $db, $result;
    private $rows;
    
    public function __construct() {
        $this->db = new mysqli('localhost', 'root', 'root', 'test', '8889');
    }
    

    public function query($sql) {

        $this->result = $this->db->query($sql);
    }
    
    public function rows() {
        for ($x = 1; $x <= $this->db->affected_rows; $x++) {
            $this->rows[] = $this->result->fetch_assoc();
        }
        return $this->rows;
    }
}

?>
