<?php

class Product {

    private $name;
    private $description;
    private $createdAt;
    private $updatedAt;
    private $deletedAt;

    function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
        $this->createdAt = new DateTime();
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description): self
    {
        $this->description = $description;
        $this->updatedAt = new DateTime();
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
     */
    public function setName($name): self
    {
        $this->name = $name;
        $this->updatedAt = new DateTime();
        return $this;
    }

    public function delete(): self
    {
        $this->deletedAt = new DateTime();
        return $this;
    }

    public function setDeleteAt(DateTime $dt): self
    {
        $this->deletedAt = $dt;
        return $this;
    }

    function __toString()
    {
        return "Name: $this->name, Description: ".$this->description.
               "\n c: ".$this->createdAt->format('d.m.Y').
               "\n u: ".(($this->updatedAt != null) ? $this->updatedAt->format('d.m.Y') : '').
               "\n d: ".(($this->deletedAt != null) ? $this->deletedAt->format('d.m.Y') : '')."\n";
               //"\n d: ".$this->deletedAt->format('d.m.Y') ?? ''."\n";
    }
}

$p1 = new Product('Tasse', 'Keramik, gelb');
echo $p1;
$p1->setName("Schöne Tasse");
echo $p1;
$p1->delete();
echo $p1;