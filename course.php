<?php
    class course{
        public $db;
        public $code;
        public $name;
        public $progression;
        public $course_syllabus;

        // Get database connection
        function __construct() {
          $this->db = new mysqli('localhost', 'root', '', 'courses') or die('Fel vid anslutning');
          if($this->db->connect_errno > 0) {
            die("Fel vid anslutning");
          }
        }


        // Get the list with courses
        public function get_courses(){

            $sql = "SELECT id, code, name, progression, course_syllabus FROM courses";

            // Execute SQL command and create a result set
            $result = $this->db->query($sql);
        
            if($result->num_rows > 0) { // return true
            $output = array();
                while($row = mysqli_fetch_assoc($result)){
                    $output[] = $row;
                }
                return $output;
            }
        
        }
	// Add data from input to database
        public function add_course($code, $name, $progression, $course_syllabus){
            $sql = "INSERT INTO courses (code, name, progression, course_syllabus) VALUES ('$code', '$name', '$progression', '$course_syllabus');";
            
           return $result = $this->db->query($sql);
           get_courses();
        }

    }
?>
