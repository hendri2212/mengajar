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

function saveBooks($file, $books) {
    $data = '';
    foreach ($books as $book) {
        $data .= "{$book['id']}|{$book['title']}|{$book['author']}
";
    }
    file_put_contents($file, $data);
}

if (isset($argv[1])) {
    $id = $argv[1];
    $books = getBooks($file);

    $updatedBooks = [];
    foreach ($books as $book) {
        if ($book['id'] != $id) {
            $updatedBooks[] = $book;
        }
    }

    saveBooks($file, $updatedBooks);
    echo "Buku berhasil dihapus!";
} else {
    echo "Parameter ID tidak ditemukan.";
}
?>