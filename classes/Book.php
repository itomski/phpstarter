<?php

class Book {

    private $title;
    private $isbn;
    private $price;

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of isbn
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set the value of isbn
     */
    public function setIsbn($isbn): self
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice($price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getOfferPrice(): float
    {
        return $this->price - ($this->price * 0.2);
    }

    // Virtuelle Getter manipulieren den Wert eines Attribut vor der Rückgabe
    // Oder stellen den Rückgabewert zusammen

    public function getArrayData(): array
    {
        return ['title' => $this->title, 'isbn' => $this->isbn];
    }
}