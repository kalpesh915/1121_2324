<?php
    require_once("Connection.class.php");

    class Category extends Connection{
        public function addNewCategory($catgoryname){
            // check category name for available or not
            $sqlquery = "select categoryname from categorys where categoryname = '$catgoryname'";

            $result = $this->connection->query($sqlquery);

            if($result->num_rows > 0){
                return false;
            }else{
                $categoryClassName = str_replace(" ", "_", $catgoryname);
                $sqlquery = "insert into categorys (categoryname, categoryclassname) values ('$catgoryname', '$categoryClassName')";
                $this->connection->query($sqlquery);
                return true;
            }
        }

        public function getAllCategory(){
            $sqlquery = "select * from categorys";
            return $this->connection->query($sqlquery);
        }

        public function changeCategoryStatus($categoryid, $status){
            $sqlquery = "update categorys set status = $status where categoryid = $categoryid";
            $this->connection->query($sqlquery);
        }

        public function getOneCategory($categoryid){
            $sqlquery = "select * from categorys where categoryid = $categoryid";
            return $this->connection->query($sqlquery);
        }

        public function updateCategory($categoryid, $catgoryname){
            $sqlquery = "select categoryname from categorys where categoryname = '$catgoryname'";

            $result = $this->connection->query($sqlquery);

            if($result->num_rows > 0){
                return false;
            }else{
                $categoryClassName = str_replace(" ", "_", $catgoryname);
                $sqlquery = "update categorys set categoryname = '$catgoryname', categoryclassname = '$categoryClassName' where categoryid = $categoryid";
                $this->connection->query($sqlquery);
                return true;
            }
        }
    }

    $category = new Category();
?>