<?
function Zotero_dbConnectAuth($db) {
        if ($db == 'master') {
               $host = 'localhost';
                $port = 3306;
                $db = 'zotero_master';
                $user = '{{mysql_user_name}}';
                $pass = '{{mysql_user_psw}}';
        }
        else if ($db == 'shard') {
                $host = false;
                $port = false;
                $db = false;
                $user = '{{mysql_user_name}}';
                $pass = '{{mysql_user_psw}}';
        }
        else if ($db == 'id1') {
               $host = 'localhost';
                $port = 3306;
                $db = 'zotero_ids';
                $user = '{{mysql_user_name}}';
                $pass = '{{mysql_user_psw}}';
        }
        else if ($db == 'id2') {
                $host = 'localhost';
                $port = 3306;
                $db = 'zotero_ids';
                $user = '{{mysql_user_name}}';
                $pass = '{{mysql_user_psw}}';
        }
        else if ($db == 'www1') {
                $host = 'localhost';
                $port = 3306;
                $db = 'zotero_www';
                $user = '{{mysql_user_name}}';
                $pass = '{{mysql_user_psw}}';
        }
        else if ($db == 'www2') {
                $host = 'localhost';
                $port = 3306;
                $db = 'zotero_www';
                $user = '{{mysql_user_name}}';
                $pass = '{{mysql_user_psw}}';
        }
        else {
                throw new Exception("Invalid db '$db'");
        }
        return array('host'=>$host, 'port'=>$port, 'db'=>$db, 'user'=>$user, 'pass'=>$pass);
}
?>
