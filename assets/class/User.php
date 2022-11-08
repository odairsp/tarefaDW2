<?php

class User {

    private $name;
    private $lastName;
    private $image;
    private $cpf;
    private $rg;
    private $city;
    private $login;
    private $email;
    private $passwd;

    public function __construct(array $dados) {
        $this->name = $dados['name'];
        $this->lastName = $dados['lastName'];
        $this->image = $dados['image'];
        $this->cpf = $dados['cpf'];
        $this->rg = $dados['rg'];
        $this->city = $dados['address']['city'];
        $this->email = $dados['email'];
        $this->login = $this->getEmail();
        $this->setPasswd($this->cpf);
    }
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

        public function getPasswd() {
        return $this->passwd;
    }

    public function setPasswd(string $senha): void {
        $this->passwd = substr($senha, 0, 4);
    }

    public function getName() {
        return $this->name;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getImage() {
        return $this->image;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getRg() {
        return $this->rg;
    }

    public function getCity() {
        return $this->city;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setLastName($endName): void {
        $this->endName = $endName;
    }

    public function setImage($image): void {
        $this->image = $image;
    }

    public function setCpf($cpf): void {
        $this->cpf = $cpf;
    }

    public function setRg($rg): void {
        $this->rg = $rg;
    }

    public function setCity($city): void {
        $this->city = $city;
    }

    public function setLogin($email): void {
        $this->login = $email;
    }

}
