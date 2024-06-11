<?php
    require_once("Connection.class.php");
    class Team extends Connection{
        public function addNewTeamMember($membername, $memberdesignation, $memberdescriotion, $memberfacebook, $memberinstagram, $membertwitter, $memberlinkedin, $memberyoutube, $membersnapchat, $membertelegram, $memberphoto){
            $sqlquery = "insert into team (membername, memberdesignation,memberdescription, memberfacebook, memberinstagram, membertwitter, memberlinkedin, memberyoutube, membersnapchat, membertelegram, memberphoto) values ('$membername', '$memberdesignation', '$memberdescriotion', '$memberfacebook', '$memberinstagram', '$membertwitter', '$memberlinkedin', '$memberyoutube', '$membersnapchat', '$membertelegram', '$memberphoto')";

            $this->connection->query($sqlquery);
        }

        public function getAllTeamMembers(){
            $sqlquery = "select * from team";
            return $this->connection->query($sqlquery);
        }

        public function getOneTeamMember($teamid){
            $sqlquery = "select * from team where teamid = $teamid";
            return $this->connection->query($sqlquery);
        }

        public function updateTeamStatus($teamid, $status){
            $sqlquery = "update team set status = $status where teamid = $teamid";
            $this->connection->query($sqlquery);
        }

        public function updateTeamMember($teamid, $membername, $memberdesignation, $memberdescriotion, $memberfacebook, $memberinstagram, $membertwitter, $memberlinkedin, $memberyoutube, $membersnapchat, $membertelegram, $memberphoto = null){
            
            $sqlquery = "update team set membername = '$membername', memberdesignation = '$memberdesignation', memberdescription = '$memberdescriotion', memberfacebook = '$memberfacebook', memberinstagram = '$memberinstagram', membertwitter = '$membertwitter', memberlinkedin = '$memberlinkedin', memberyoutube = '$memberyoutube', membersnapchat = '$membersnapchat', membertelegram = '$membertelegram' where teamid = $teamid";

            $this->connection->query($sqlquery);

            if($memberphoto != null){
                $sqlquery = "select memberphoto from team where teamid = $teamid";
                $result = $this->connection->query($sqlquery);
                while($row = $result->fetch_assoc()){
                    unlink($row["memberphoto"]);
                }

                $sqlquery = "update team set memberphoto = '$memberphoto' where teamid = $teamid";

                $this->connection->query($sqlquery);
            }
        }

        public function deleteTeamMember($teamid){
            $sqlquery = "select memberphoto from team where teamid = $teamid";
            $result = $this->connection->query($sqlquery);
            while($row = $result->fetch_assoc()){
                unlink($row["memberphoto"]);
            }

            $sqlquery = "delete from team where teamid = $teamid";

            $this->connection->query($sqlquery);
        }
    }

    $team = new Team();
?>