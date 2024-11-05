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

if (isset($argv[1]) && isset($argv[2])) {
    $title = $argv[1];
    $author = $argv[2];

    $books = getBooks($file);
    $newId = count($books) > 0 ? $books[count($books) - 1]['id'] + 1 : 1;
    $books[] = ['id' => $newId, 'title' => $title, 'author' => $author];

    saveBooks($file, $books);
    echo "Buku berhasil ditambahkan!";
} else {
    echo "Parameter tidak lengkap. Gunakan: php create.php <title> <author>\n";
    exit;
}
?>