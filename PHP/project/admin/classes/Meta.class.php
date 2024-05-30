<?php
    require_once("Connection.class.php");

    class Meta extends Connection{
        public function getMetaDetails($metaid){
            $sqlquery = "select * from metatags where metaid = $metaid";
            return $this->connection->query($sqlquery);
        }

        public function updateMetatags($metaid, $metakeywords, $metadescription, $googletagid){
            $sqlquery = "update metatags set metakeywords = '$metakeywords', metadescription = '$metadescription', googletagid = '$googletagid' where metaid = $metaid";
            //echo $sqlquery;
            $this->connection->query($sqlquery);
        }
    }

    $meta = new Meta();
?>