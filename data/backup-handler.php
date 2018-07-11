<?php
    require_once('handler.php');

    //if (isset($_POST['backup'])) {
        $tables = '*';
        
        if ($tables=='*') {

            $tables = array();
            $result = $handler->query('SHOW TABLES');

            while ($row = $result->fetch()) {
                $tables[] = $row[0];
            }
        }else{
            $tables = is_array($tables) ? $tables : explode(',', $tables);
        }

        

        $return="";

        foreach ($tables as $table) {
           $result = $handler->query('SELECT * FROM '.$table);
           $num_fields = $result->columnCount();

           $return.= 'DROP TABLE IF EXISTS '.$table.';';
           $r = $handler->query('SHOW CREATE TABLE '.$table);
           $row2 = $r->fetch();

           $return.="\n\n".$row2[1].";\n\n";
       

        for ($i=0; $i < $num_fields; $i++) { 
            while ($row = $result->fetch()) {
                $return.= 'INSERT INTO '.$table.' VALUES(';

                for ($j=0; $j < $num_fields ; $j++) { 
                    $row[$j] = addslashes($row[$j]);
                    $row[$j] = preg_replace("/\n/","\\n",$row[$j]);
                    if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                    if ($j<($num_fields-1)) { $return.= ','; }
                }

                $return.= ");\n";
            }
        }

            $return.="\n\n\n";

    }

    //save the file here
    $handle = fopen('../backup/db-backup-'.date("mdyhms").'.sql', 'a+');
    fwrite($handle,$return);
    fclose($handle);
    echo ('backup/db-backup-'.date("mdyhms").'.sql');


?>