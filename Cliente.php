<?php

class Cliente
{
   private $table = "clientes";
   private $id;
   private $nome;
   private $email;

   /**
    * @param string $table
    */
   public function setTable()
   {
      $this->table = $table;
      return $this;
   }

   /**
    * @return string
    */
   public function getTable()
   {
      return $this->table;
   }

   /**
    * @param mixed $id
    */
   public function setId($id)
   {
      $this->id = $id;
      return $this;
   }
   
   /**
    * @return mixed
    */
   public function getId()
   {
      return $this->id;
   }
   
   /**
    * @param mixed $nome
    */
   public function setNome($nome)
   {
      $this->nome = $nome;
      return $this;
   }
   
   /**
    * @return mixed
    */
   public function getNome()
   {
      return $this->nome;
   }

   /**
    * @param mixed $email
    */
   public function setEmail($email)
   {
      $this->email = $email;
      return $this;
   }
   
   /**
    * @return mixed
    */
   public function getEmail()
   {
      return $this->email;
   }
 
}