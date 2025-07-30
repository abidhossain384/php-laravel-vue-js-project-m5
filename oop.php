<?php

class Book {

    // TODO: Add properties as Private
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {

        // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // TODO: Add getTitle method
    public function getTitle() {
        return $this->title;
    }

    // TODO: Add getAvailableCopies method
    public function getAvailableCopies() {
        return $this->availableCopies;
    }
 
    // TODO: Add borrowBook method
    public function borrowBook() {
        if($this->availableCopies > 0) {
            $this->availableCopies--;
        }
        else {
            echo "Book Not Available";
        }
    }

    // TODO: Add returnBook method
    public function returnBook() {
        $this->availableCopies++;
    }

}

class Member {

    // TODO: Add properties as Private
    private $name;

    public function __construct($name) {

        // TODO: Initialize properties
        $this->name = $name;

    }

    // TODO: Add getName method
    public function getName() {
        return $this->name;
    }

    // TODO: Add borrowBook method
    public function borrowBook($book) {
        $book->borrowBook();
    }

    // TODO: Add returnBook method
    public function returnBook($book) {
        $book->returnBook();
    }

 
}

// Usage
// TODO: Create 2 books with the following properties
// Book 1 - Name: The Great Gatsby, Available Copies: 5.
// Book 2 - Name: To Kill a Mockingbird, Available Copies: 3.
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// TODO: Create 2 members with the following properties
// Member 1 - Name: John Doe
// Member 2 - Name: Jane Smith
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// TODO: Apply Borrow book method to each member
$member1->borrowBook($book1);
$member2->borrowBook($book2);

$bookName1 = $book1->getTitle();
$bookName2 = $book2->getTitle();

$bookAvailable1 = $book1->getAvailableCopies();
$bookAvailable2 = $book2->getAvailableCopies();

// TODO: Print Available Copies with their names:
echo "Available Copies of '$bookName1': $bookAvailable1\n";
echo "Available Copies of '$bookName2': $bookAvailable2\n";

?>