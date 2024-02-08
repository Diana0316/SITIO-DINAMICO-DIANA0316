<?php
    class crud{
        private $db;

        function  __construct($conn){
            $this->db = $conn;
        }

        public function insert($nombre, $apellido, $dob, $email, $telefono, $especialidad){
            try {
                $sql = "INSERT INTO registro(nombre, apellido, nacimiento, email, telefono, especialidad_id) VALUES (:nombre,:apellido,:dob,:email,:telefono,:especialidad)";
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':nombre',$nombre);
                $stmt->bindparam(':apellido',$apellido);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':telefono',$telefono);
                $stmt->bindparam(':especialidad',$especialidad);

                $stmt->execute();
                return true; 

                
            } catch (PDOException $e) {
                echo $e->getMassage();
                return false;
            }

        }
    }
?>