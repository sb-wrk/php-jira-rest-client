<?php

namespace JiraRestApi\User;

class UserService extends \JiraRestApi\JiraClient
{
    private $uri = '/group';
    private $useruri = '/user';

    /**
     * get all group list.
     *
     * @return array of Group class
     */
    public function getUsersFromGroup($group, $expand = true)
    {
        $params = array(
            'groupname' => $group,
            'expand' => $expand ? "users" : "",
        );	

	$url = http_build_query($params);

        $ret = $this->exec($this->uri.'?'.$url, null);

        $group = $this->json_mapper->map(
             json_decode($ret, false), new \JiraRestApi\User\Group()
        );

        return $group;
    }    

    public function getUser($user, $expand = "") {
        $params = array(
            'username' => $user,
            'expand' => $expand,
        );

        $url = http_build_query($params);

        $ret = $this->exec($this->useruri.'?'.$url, null);

        $user = $this->json_mapper->map(
             json_decode($ret, false), new \JiraRestApi\User\User()
        );

        return $user;
    }
    
}

?>
