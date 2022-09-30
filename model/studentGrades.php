<?php
    include("../controller/dbConnection.php");

    class StudentGrades extends DbConnection{
        
        public function getStudentGrades($studentId){

            $sql = "SELECT * FROM student_record WHERE student_id = ?";
            $statement = $this->databaseConnect()->prepare($sql);
            $statement -> execute([$studentId]);
            $results = $statement->fetchAll();

            return $results;

        }

        public function addStudentGrade($studentId, $filipino, $english, $mathematics, $science, $average){

            $sql = "INSERT INTO student_record(student_id, filipino_grade, english_grade, mathematics_grade, science_grade, general_average) VALUES(?, ?, ?, ?, ?, ?)";
            $statement = $this->databaseConnect()->prepare($sql);
            $isSuccess = $statement -> execute([$studentId, $filipino, $english, $mathematics, $science, $average]);

            return $isSuccess;
            
        }

        public function getStudentInfo($studentId){

            $sql = "SELECT * FROM students_info WHERE student_id = ?";
            $statement = $this->databaseConnect()->prepare($sql);
            $statement -> execute([$studentId]);
            $results = $statement->fetchAll();

            return $results;
        }
    }