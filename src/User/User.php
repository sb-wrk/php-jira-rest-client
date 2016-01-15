<?php

namespace JiraRestApi\User;

class User
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
      * User key.
      *
      * @var string
      */
     public $key;

     /**
      * User name.
      *
      * @var string
      */
     public $name;
     
    /**
      * Email address.
      *
      * @var string
      */
     public $emailAddress;     

     /**
      * avatar URL.
      *
      * @var array
      */
     public $avatarUrls;

     /**
      * @var string
      */
     public $displayName;

     /* @var array */
     public $applicationRoles;

     /* @var GroupList[\JiraRestApi\User\Group] */
     public $groups;
}

