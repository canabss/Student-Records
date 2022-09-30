<?php
    include("../controller/dbConnection.php");

    class AddStudent extends DbConnection{

        public function addNewStudent($firstname, $middlename, $lastname, $birthday, $age, $gender, $email, $address, $course, $year, $section){

            $sql = "INSERT INTO students_info(first_name, middle_name, last_name, birthday, age, gender, email, address, course, year, section) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $statement = $this->databaseConnect()->prepare($sql);
            $isSuccess = $statement -> execute([$firstname, $middlename, $lastname, $birthday, $age, $gender, $email, $address, $course, $year, $section]);

            return $isSuccess;
            
        }
    }