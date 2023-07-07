<?php
namespace src\Model;

class User extends Base
{
    function __construct(private string $name,
                         private string $email,
                         int $phone,
                         private int $id){
        parent::__construct($phone);
    }

    function getName(): string{
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    function getPhone(): string {
        return $this->phone;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

}