<?php
 
class db {
        private static $db = NULL;
        private $link = NULL;
        private $result = NULL;
        public static function getInstance() {
                if ($this->db == NULL) $this->db = new db;
                return $this->db;
                }
        public function __construct($host,$user,$pass) {
                $this->link = $this->checker("mysql_connect('$host','$user','$pass');",false);
                }
        public function close() {
                $this->checker('mysql_close($this->link);',false);
                }
        public function selectDB($db) {
                $this->checker("mysql_select_db('$db');",false);
                }
        public function param($query) {
                $this->set($query);
                }
        public function set($query) {
                $this->checker("mysql_query('$query');",false);
                }
        public function get($query,$parse = false) {
                $result = $this->checker("mysql_query('$query');",true);
                $arr = array();
                $cr = mysql_num_rows($result);
                if ($cr > 0) {
                        while ($row = mysql_fetch_assoc($result)) $arr[] = $row;
                        if ($cr == 1) {
                                $cf = mysql_num_fields($result);
                                if ($parse and $cf == 1) {
                                        $f = mysql_fetch_field($result,0);
                                        $return = $arr[0][$f->name];
                                        }
                                else $return = $arr[0];
                                }
                        else $return = $arr;
                        $this->checker("mysql_free_result('$result');",false);
                        return $return;
                        }
                else return false;
                }
        private function checker($query,$t) {
                $r = NULL;
                eval('$r = '.$query);
                if (!$t) unset($r);
                else if ($r) return $r;
                }
        }
?>