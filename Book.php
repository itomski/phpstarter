<?php

class Book {

    protected $title;
    protected $author;
    protected $isbn;
    protected $price = 0.0; // Defaultwert
    protected $ebook = false; // Defaultwert

    // Wird automatich verwendet, wenn man mit new Book() Objekte baut
    // Verlangt 3 Parameter
    function __construct($title, $author, $isbn) {
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
    }

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
     * Get the value of author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     */
    public function setAuthor($author): self
    {
        $this->author = $author;

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
    // self ist die Klasse selbt d.h. Book
    // this ist das Objekt
    public function setPrice($price): self
    {
        if($price >= 0) {
            $this->price = $price;
        }
        return $this;
    }

    /**
     * Get the value of ebook
     */
    public function getEbook()
    {
        return $this->ebook;
    }

    /**
     * Set the value of ebook
     */
    public function setEbook($ebook): self
    {
        $this->ebook = $ebook;

        return $this;
    }

    public function summary() {
        return 'Ein Buch von '.$this->getAuthor().' mit dem Titel '.$this->getTitle().'.';
    }


    function __toString() { // Automatische Konvertierung des Objektes in ein String
        return $this->title.', '.$this->author;
    }
}