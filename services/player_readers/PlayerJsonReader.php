<?php

class PlayerJsonReader implements PlayerReader {
    public function read() {
        $json = '[{"name":"Jonas Valenciunas","age":26,"job":"Center","salary":"4.66m"},{"name":"Kyle Lowry","age":32,"job":"Point Guard","salary":"28.7m"},{"name":"Kawhi Leonard","age":27,"job":"Shooting Guard","salary":"17.64m"},{"name":"Jakob Poeltl","age":22,"job":"Center","salary":"2.704m"}]';
        return $json;
    }
}

?>
