<?php

    class StudentListView extends StudentList{

        public function showStudentList(){
            $result = $this->getStudentList();
            if(!empty($result)){
                foreach($result as $key => $value){
                    echo "<tr><td>".$value["student_id"]."</td>";
                    echo "<td>".$value["first_name"]." ".$value["middle_name"]." ".$value["last_name"]."</td>";
                    echo "<td>".$value["birthday"]."</td>";
                    echo "<td>".$value["age"]."</td>";
                    echo "<td>".$value["gender"]."</td>";
                    echo "<td>".$value["email"]."</td>";
                    echo "<td>".$value["address"]."</td>";
                    echo "<td>".$value["course"]."</td>";
                    echo "<td>".$value["year"]." ".$value["section"]."</td>";
                    echo "<td width='10%'>
                            <form action='view/addStudentGrades.php' method='POST'>
                                <input type='hidden' name='studentId' value='".$value["student_id"]."'>
                                <button type='submit' class='btn btn-success action-button' name = 'view'>
                                    <i class='fas fa-eye'></i> View Grades
                                </button>
                            </form>

                            <form action='view/editStudent.php' method='POST'>
                                <input type='hidden' name='studentId' value='".$value["student_id"]."'>
                                <button type='submit' class='btn btn-primary action-button' name = 'edit'>
                                    <i class='fas fa-edit'></i> Edit
                                </button>
                            </form>

                            <form action='controller/deleteStudent.php' method='POST'>
                                <input type='hidden' name='studentId' value='".$value["student_id"]."'>
                                <button type='submit' class='btn btn-danger action-button' name = 'delete'>
                                    <i class='fas fa-trash'></i> Delete
                                </button>
                            </form>
                    </td></tr>";
                }
            }
            else
                echo "<tr><td colspan='10'>No Records Found</td></tr>";
            
        }
    }