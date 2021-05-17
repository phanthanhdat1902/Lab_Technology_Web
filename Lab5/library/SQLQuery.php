<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SQLQuery
 *
 * @author dat.pt173001
 */
class SQLQuery {

    protected $_connect;
    protected $_result;

    function connect($server, $user, $pass, $myd) {
        $this->_connect = new mysqli($server, $user, $pass, $myd);
        if (!$this->_connect) {
            die("Connection failed: " . mysqli_connect_error());
            return 0;
        }
        return 1;
    }

    function create($name, $weight, $cost, $numberAvailable) {
        $query = "INSERT INTO Products(Product_desc,Cost,Weight,Numb) VALUES ('$name','$weight','$cost','$numberAvailable')";
        $result = mysqli_query($this->_connect, $query);
        if (!$query) {
            die('Could not enter data: ' . mysqli_error());
            return 0;
        } else {
            return 1;
        }
    }

    function update($table, $name) {
        $result = $this->select4Name($table, $name);
        $temp = (int) $result[0]['Numb'];
        $temp--;
        $query = 'UPDATE  ' . $table . ' SET Numb = ' . $temp . ' WHERE Product_desc=\'' . $name .'\'';
        $this->_result = mysqli_query($this->_connect, $query);
    }

    function selectAll($tables) {
        $query = 'select * from `' . $tables . '`;';
        $this->_result = mysqli_query($this->_connect, $query);

        if (preg_match("/select/i", $query)) {
            $result = array();
            $field = array();
            $numOfFields = mysqli_num_fields($this->_result);

            for ($i = 0; $i < $numOfFields; ++$i) {
                $finfo = $this->_result->fetch_field_direct($i);
                array_push($field, $finfo->name);
            }

            while ($row = mysqli_fetch_row($this->_result)) {
                for ($i = 0; $i < $numOfFields; ++$i) {
                    $temp[$field[$i]] = $row[$i];
                }
                array_push($result, $temp);
            }
            mysqli_free_result($this->_result);

            return ($result);
        }
    }

    function select4Name($tables, $name) {
        $query = 'select * from `' . $tables . '`where Product_desc = \'' . $name . '\';';
        $this->_result = mysqli_query($this->_connect, $query);

        if (preg_match("/select/i", $query)) {
            $result = array();
            $field = array();
            $numOfFields = mysqli_num_fields($this->_result);

            for ($i = 0; $i < $numOfFields; ++$i) {
                $finfo = $this->_result->fetch_field_direct($i);
                array_push($field, $finfo->name);
            }

            while ($row = mysqli_fetch_row($this->_result)) {
                for ($i = 0; $i < $numOfFields; ++$i) {
                    $temp[$field[$i]] = $row[$i];
                }
                array_push($result, $temp);
            }
            mysqli_free_result($this->_result);

            return ($result);
        }
    }

    function delete($id) {
        
    }

}
