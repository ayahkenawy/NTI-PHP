<?php
include_once __DIR__.'\..\config\connection.php';
include_once __DIR__.'\..\config\crud.php';
class User extends connection implements crud
{
    private $id;
    private $name;
    private $gender;
    private $phone;
    private $email;
    private $status;
    private $password;
    private $img;
    private $code;
    private $created_at;
    private $updated_at;

    /**
     * Get the value of id
     */

    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */

    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of gender
     */

    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */

    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get the value of phone
     */

    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */

    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of email
     */

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of status
     */

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */

    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of password
     */

    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of img
     */

    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */

    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get the value of code
     */

    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */

    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of created_at
     */

    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */

    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     */

    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */

    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }
    public function create(){}
    public function read(){}
    public function update(){}
    public function delete(){}
}
