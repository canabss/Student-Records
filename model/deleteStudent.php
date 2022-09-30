<?php
    include("../controller/dbConnection.php");  

    class DeleteStudent extends DbConnection{

        public function deleterecord($studentId){

            $sql = "DELETE FROM students_info WHERE student_id = ?";
            $statement = $this->databaseConnect()->prepare($sql);
            $isSuccess = $statement -> execute([$studentId]);

            return $isSuccess;
        }

    }