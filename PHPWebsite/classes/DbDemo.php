<?php

class DbDemo extends MySQLConnection {

    public function getData () {
        $sql_query = 'SELECT * FROM product';
        $stmt = $this->getConnection()->query($sql_query);
        while ($row = $stmt->fetch()) {
            echo $row ['pid'] .' '. $row ['pname'] . '<br/>';
        }
    }
}