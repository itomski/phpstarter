<?php

class Book {

    // public / protected / private
    public $title; // Kann von allen verwendet werden
    private $isbn; // Kann nur von der Klasse (bzw. Object) selbst verwendet werden
    protected $author = 'Unbekannt'; // Kann auch von erbenden Klassen benutzt werden
    protected $ebook = false;

    // ist automatisch public
    function getIsbn() { // Getter
        // Die Methode darf auf die eigenen privaten Eigenschaften zugreifen
        return $this->isbn;
    }

    function setIsbn(string $isbn) :void {
        $this->isbn = $isbn; // lokale Variable isbn wird in die Instanzvariable $this->isbn geschrieben
    }

    public function isEbook() {
        return $this->ebook;
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
}

$b1 = new Book();

// Eigenschaft ist sichtbar, da sie public ist
$b1->title = 'Kochen ohne Fett';
echo $b1->title;

// Eigenschaft ist NICHT sichtbar, da sie privat ist
// $b1->isbn = '2345-6789-101112'; // Error
$b1->setIsbn('5679-221518-1234');
echo $b1->getIsbn();

// Eigenschaft ist NICHT sichtbar, da sie protected ist
// Abgeleitete Klassen (Kindklassen) können diese Eigenschaft sehen
// $b1->author = 'Peter Parker'; // Error

$b2 = new Book();
$b2->title = 'Backen ohne Mehl';

print_r([$b1, $b2]);