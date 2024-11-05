<?php
$file = './data/books.txt';

function getBooks($file) {
    $books = [];
    if (file_exists($file)) {
        $fileContents = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($fileContents as $line) {
            list($id, $title, $author) = explode('|', $line);
            $books[] = ['id' => $id, 'title' => $title, 'author' => $author];
        }
    }
    return $books;
}

$books = getBooks($file);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    foreach ($books as $book) {
        if ($book['id'] == $id) {
            echo "ID: " . $book['id'] . ", Judul: " . $book['title'] . ", Penulis: " . $book['author'] . "
";
            break;
        }
    }
} else {
    foreach ($books as $book) {
        echo "ID: " . $book['id'] . ", Judul: " . $book['title'] . ", Penulis: " . $book['author'] . "
";
    }
}
?>