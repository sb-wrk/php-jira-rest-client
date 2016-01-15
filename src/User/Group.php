<?php

namespace JiraRestApi\User;

class Group
{
    /*
     * @var string
     */
    public $expand;

    /**
     * User URI.
     *
     * @var string
     */
    public $self;
         
     /**
      * User name.
      *
      * @var string
      */
     public $name;

      /* @var \JiraRestApi\User\User[] */
     public $users;
}

