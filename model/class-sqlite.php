<?php

class sqlite {

// ==================================================================
//	DB Constructor

    function sqlite($bbdd) {
        $this->dbh = sqlite_open($bbdd, 0666, $sqliteerror);
        if (!$this->dbh) {
            $this->err("");
        }
    }

    function query($query) {
        $this->result = sqlite_query($this->dbh, $query);
    }

    function get_results($query) {
        $this->query($query);
        foreach (sqlite_fetch_all($this->result, SQLITE_ASSOC) AS $row) {
            $valor[] = $row;
        }
        return $valor;
    }

    function save($datos) {
        foreach ($datos as $tabla => $vars) {
            if (array_key_exists("option_id", $vars)) {
                $r = $this->update($vars['option_id'], $vars, $tabla);
            } else {
                $r = $this->insert($vars, $tabla);
            }
        }
        return $r;
    }

    function insert($vars, $tabla) {
        $value_vars = "";
        $name_vars = "";
        $this->query("SELECT * FROM $tabla WHERE 1 LIMIT 1");
        $num = sqlite_num_fields($this->result);
        for ($i = 0; $i < $num; $i++) {
            $fieldsname[] = sqlite_field_name($this->result, $i);
        }

        foreach ($vars as $clave => $valor) {
            if (!in_array($clave, $fieldsname)) {
                $clavelist[] = $clave;
            }
            if ($valor == "relational") {
                $value_vars .= sqlite_last_insert_rowid() . ", ";
            } else {
                $value_vars .= "'" . $valor . "', ";
            }
            $name_vars .= $clave . ", ";
        }
        $name_vars = trim($name_vars, ", ");
        $value_vars = trim($value_vars, ", ");
        if (isset($clavelist)) {
            return $clavelist;
        } else {
            $this->query("INSERT INTO $tabla ($name_vars) values ($value_vars)");
            return false;
        }
    }


    function update($id, $vars, $tabla) {
        $pares = "";
        $this->query("SELECT * FROM $tabla");
        $num = sqlite_num_fields($this->result);
        for ($i = 0; $i < $num; $i++) {
            $fieldsname[] = sqlite_field_name($this->result, $i);
        }
        foreach ($vars as $clave => $valor) {
            if (!in_array($clave, $fieldsname)) {
                $clavelist[] = $clave;
            }
            $pares .= $clave . " = '" . $valor . "', ";
        }
        $pares = trim($pares, ", ");

        if (isset($clavelist)) {
            return $clavelist;
        } else {
            $this->query("UPDATE $tabla SET $pares WHERE id = $id");
            return false;
        }
    }

    function err() {
        echo '<div class="error"><h3>Error de la BB.DD</h3>
	<p>Hubo un error en la conexi&oacute;n con la bb.dd. Las posibilidades son tres:</p>
	<ul>
	<li>El nombre de usuario es incorrecto</li>
	<li>El password utilizado es incorrecto</li>
	<li>El host de la bb.dd es incorrecto</li>
	</ul>
	<p>Puedes comprobar estos datos en el archivo config.php</p>
	</div>
	';
        exit;
    }

}

//end class
?>