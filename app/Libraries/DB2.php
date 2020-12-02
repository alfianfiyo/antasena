<?php

/*
 * Copyright (C) 2020 AchmadChaidirS   
 *    
 * Author       :    AchmadChaidirS   
 * Filename     :    DB2.php
 * Date         :    Nov 6, 2020 
 * Time         :    3:01:15 PM   
 */

namespace App\Libraries;

/**
 * Description of DB2
 *
 * @author AchmadChaidirS
 */
class DB2 {

    private $hostname = '172.32.30.104';
    private $database = 'DBERIE';
    private $username = 'db2admin';
    private $password = 'password';
    private $port = '50001';
    private $options = [];
    public $connection;

    public function __construct() {
        $this->options = array(
            'autocommit' => DB2_AUTOCOMMIT_OFF,
            'DB2_ATTR_CASE' => DB2_CASE_UPPER,
            'i5_commit' => DB2_I5_TXN_SERIALIZABLE
        );

        $conn_string = "DATABASE=" . $this->database . ";HOSTNAME=" . $this->hostname . ";PORT=" . $this->port . ";PROTOCOL=TCPIP;UID=" . $this->username . ";PWD=" . $this->password . ";";
        $conn = db2_pconnect($conn_string, '', '', $this->options);

        if ($conn) {
            $this->connection = $conn;
            
        } else {

            $response = [
                'errcode' => '99',
                'message' => db2_conn_errormsg(),
                'data' => NULL
            ];

            echo json_encode($response);
        }
    }

    //public function query($sql, &$pesan) {
    public function query($sql) {
        $query = @db2_exec($this->connection_aborted(), $sql);

        $pesan = db2_stmt_error() . " - " . db2_stmt_errormsg();

        if (db2_stmt_error() != 0) {
            $pesan = db2_stmt_error() . " - " . db2_stmt_errormsg();

            $response = [
                'errcode' => '99',
                'message' => db2_stmt_error() . " - " . db2_stmt_errormsg(),
                'data' => NULL
            ];

            echo json_encode($response);
            
        } else {
            return $query;
        }
    }

    public function close() {
        db2_close($this->connection);
    }

}
