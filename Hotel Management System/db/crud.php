<?php 
   class crud {
       private $db;

       function __construct($conn)
       {
           $this ->db = $conn;
       }
       public function insert($fname,$sname,$age,$room_type){
          try {
              $sql = "INSERT INTO customers(Name,Surname,Age,RoomType) VALUES (:fname,:sname,:age,:room_type)";
              $stmt = $this->db->prepare($sql);

              $stmt->bindparam(':fname',$fname);
              $stmt->bindparam(':sname',$sname);
              $stmt->bindparam(':age',$age);
              $stmt->bindparam(':room_type',$room_type);

              $stmt->execute();

              return true;
          } catch (PDOException $e) {
             //throw $th;
             echo $e->getMessage();
             return false;
          }
       }
       public function getCustomers(){
           $sql = "SELECT * FROM `customers` a inner join room s on a.RoomType=s.room_id ";
           $result = $this->db->query($sql);
           return $result;
       }
       public function getRoomTypes(){
        $sql = "SELECT * FROM `room`";
        $result = $this->db->query($sql);
        return $result;
        }
        public function getCustomerDetails($id){
          $sql = "SELECT * FROM  customers a INNER JOIN room s on a.RoomType=s.room_id where ID=:id";
          $stmt = $this->db->prepare($sql);
          $stmt->bindparam(':id',$id);
          $stmt->execute();

          $result = $stmt -> fetch();

          return $result;
        }
        public function editCustomer($id,$fname,$sname,$age,$room_type){
           try {
            $sql = "UPDATE customers SET Name=:fname, Surname=:sname, Age=:age, RoomType=:room_type WHERE id =:id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->bindparam(':fname',$fname);
            $stmt->bindparam(':sname',$sname);
            $stmt->bindparam(':age',$age);
            $stmt->bindparam(':room_type',$room_type);

            $stmt->execute();

            return true;
           } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
            } 

        }
        public function deleteCustomer($id){


            try {
                $sql = "DELETE from customers where ID = :id";

                $stmt = $this -> db -> prepare($sql);
                $stmt -> bindparam(':id',$id);
                $stmt -> execute();
                return true;
            } catch (PDOException $e) {
                echo $e -> getMessage();
                return false;
            }
        }
        

      
   }
?>