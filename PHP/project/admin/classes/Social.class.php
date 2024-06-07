<?php 
    require_once("Connection.class.php");

    class Social extends Connection{
        public function getSocialMediaLinks(){
            $sqlquery = "select * from socialmedia where socialid = 1";
            return $this->connection->query($sqlquery);
        }

        public function updateSocialMedia($facebook, $twitter, $instagram, $youtube, $snapchat, $linkedin, $telegram, $whatsapp){
            $sqlquery = "update socialmedia set facebook = '$facebook', twitter = '$twitter', instagram = '$instagram', youtube = '$youtube', snapchat = '$snapchat', linkedin = '$linkedin', telegram = '$telegram', whatsapp = '$whatsapp' where socialid = 1";
            $this->connection->query($sqlquery);
        }
    }

    $social = new Social();
?>