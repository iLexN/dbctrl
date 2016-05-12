<?php

class MyORM extends \ORM
{


    public static function for_table($table_name, $connection_name = self::DEFAULT_CONNECTION)
    {
        self::_setup_db($connection_name);
        return new self($table_name, array(), $connection_name);
    }
        
    public function create($data=null)
    {
        $this->_is_new = true;
        if (!is_null($data)) {
            return $this->hydrate($data)->force_all_dirty();
        }
        return $this;
    }

    public function use_id_column($id_column)
    {
        $this->_instance_id_column = $id_column;
        return $this;
    }
    
    protected function _build_insert()
    {
        $query[] = "INSERT INTO";
        $query[] = $this->_quote_identifier($this->_table_name);
        $field_list = array_map(array($this, '_quote_identifier'), array_keys($this->_dirty_fields));
        $query[] = "(" . join(", ", $field_list) . ")";
        //$query[] = "VALUES";

        $placeholders = $this->_create_placeholders($this->_dirty_fields);
        $query[] = "({$placeholders})";

        if (self::get_db($this->_connection_name)->getAttribute(PDO::ATTR_DRIVER_NAME) == 'pgsql') {
            $query[] = 'RETURNING ' . $this->_quote_identifier($this->_get_id_column_name());
        }

        //echo(join(" ", $query));
        return join(" ", $query);
    }
}
