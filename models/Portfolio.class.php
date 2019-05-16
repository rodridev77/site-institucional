<?php

class Portfolio extends Model {

    public function getTrabalhos($n = false) {
        $array = array();

        $query = "SELECT * FROM portfolio";

        if ($n) {
            $query .= " LIMIT " . $n;
        }

        $stmt = $this->conn->query($query);

        if ($stmt->rowCount() > 0) {
            $array = $stmt->fetchAll();
        }

        return $array;
    }

}
