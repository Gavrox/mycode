<?php
class DatabaseTable
{
    private function query($pdo, $sql, $parameters = [])
    {
        $query = $pdo->prepare($sql);
        $query->execute($parameters);
        return $query;
    }

    public function total($pdo, $table)
    {
        $query = $this->query($pdo, 'SELECT COUNT(*) FROM
         `' . $table . '`');
        $row = $query->fetch();
        return $row[0];
    }

    public function findById($pdo, $table, $primaryKey, $value)
    {
        $query = 'SELECT * FROM `' . $table . '` WHERE
         `' . $primaryKey . '` = :value';

        $parameters = [
            'value' => $value
        ];

        $query = $this->query($pdo, $query, $parameters);

        return $query->fetch();
    }

    private function insert($pdo, $table, $fields)
    {
        $query = 'INSERT INTO `' . $table . '` (';

        foreach ($fields as $key => $value) {
            $query .= '`' . $key . '`,';
        }

        $query = rtrim($query, ',');

        $query .= ') VALUES (';

        foreach ($fields as $key => $value) {
            $query .= ':' . $key . ',';
        }

        $query = rtrim($query, ',');

        $query .= ')';

        $fields = $this->processDates($fields);

        $this->query($pdo, $query, $fields);
    }

    private function update($pdo, $table, $primaryKey, $fields)
    {
        $query = ' UPDATE `' . $table .'` SET ';

        foreach ($fields as $key => $value) {
            $query .= '`' . $key . '` = :' . $key . ',';
        }

        $query = rtrim($query, ',');

        $query .= ' WHERE `' . $primaryKey . '` = :primaryKey';

        // Set the :primaryKey variable
        $fields['primaryKey'] = $fields['id'];

        $fields = $this->processDates($fields);

        $this->query($pdo, $query, $fields);
    }

    public function delete($pdo, $table, $primaryKey, $id)
    {
        $parameters = [':id' => $id];

        $this->query($pdo, 'DELETE FROM `' . $table . '` WHERE
         `' . $primaryKey . '` = :id', $parameters);
    }

    public function findAll($pdo, $table)
    {
        $result = query($pdo, 'SELECT * FROM `' . $table . '`');

        return $result->fetchAll();
    }

    private function processDates($fields)
    {
        foreach ($fields as $key => $value) {
            if ($value instanceof DateTime) {
                $fields[$key] = $value->format('Y-m-d');
            }
        }

        return $fields;
    }

    public function save($pdo, $table, $primaryKey, $record)
    {
        try {
            if ($record[$primaryKey] == '') {
                $record[$primaryKey] = null;
            }
            $this->insert($pdo, $table, $record);
        } catch (PDOException $e) {
            $this->update($pdo, $table, $primaryKey, $record);
        }
    }
}

?>