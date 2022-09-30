<?php
    class StudentList extends DbConnection{

        public function getStudentList(){

            $sql = "SELECT * FROM students_info";
            $statement = $this->databaseConnect()->query($sql);
            $results = $statement->fetchAll();

            return $results;
        }

    }