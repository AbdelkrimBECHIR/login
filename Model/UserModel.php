<?php
class User
{
    public int $idUser;
    public string $email;
    public string $firstname;
    public string $name;
    public string $password;
    public string $role;
    public string $create_time;

    public function getId(): int
    {
        return $this->idUser;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstname;
    }
    public function setFirstName(string $firstname): self
    {
        $this->firstname = $firstname;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getRole():string
    {
        return $this->role;
    }
    public function setRole(string $role): self
    {
        $this->role=$role;
        return $this;
    }

    public function getCreateTime(): string
    {
        return $this->create_time;
    }

}