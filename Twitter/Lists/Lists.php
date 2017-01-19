<?php
namespace Twitter\Lists;

/**
 * 
 */
class Lists extends \Twitter\Base
{
    public function getUserList($value)
    {
        try{
            
            $url = "/lists/list.json";
            $response = $this->callTwitter("get",$url,$value);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }

    public function getListMembers($value)
    {
        try{           
            $url = "/lists/members.json";            
            $response = $this->callTwitter("get",$url,$value);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }
    public function getList($value)
    {
        try{
            
            $url = "/lists/ownerships.json";
            $response = $this->callTwitter("get",$url,$value);
            return $response;
        } catch (Exception $e) {
            $response = array("error" => $e->getMessage());
            return $response;
        }
    }   
}
?>