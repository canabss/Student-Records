<?php
    include("../controller/dbConnection.php");
    
    class EditStudent extends DbConnection{

        public function getStudentInfo($studentId){

            $sql = "SELECT * FROM students_info WHERE student_id = ?";
            $statement = $this->databaseConnect()->prepare($sql);
            $statement -> execute([$studentId]);
            $results = $statement->fetchAll();

            return $results;
        }

        public function updateStudentInfo($firstname, $middlename, $lastname, $birthday, $age, $gender, $email, $address, $course, $year, $section, $studentId){

            $sql = "UPDATE students_info SET first_name = ?, middle_name = ?, last_name = ?, birthday = ?, age = ?, gender = ?, email = ?, address = ?, course = ?, year = ?, section = ? WHERE student_id = ?";
            $statement = $this->databaseConnect()->prepare($sql);
            $isSuccess = $statement -> execute([$firstname, $middlename, $lastname, $birthday, $age, $gender, $email, $address, $course, $year, $section, $studentId]);

            return $isSuccess;

        }
    }