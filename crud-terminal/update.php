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

if (isset($argv[1]) && isset($argv[2]) && isset($argv[3])) {
    $id = $argv[1];
    $title = $argv[2];
    $author = $argv[3];

    $books = getBooks($file);
    foreach ($books as &$book) {
        if ($book['id'] == $id) {
            $book['title'] = $title;
            $book['author'] = $author;
            break;
        }
    }

    saveBooks($file, $books);
    echo "Buku berhasil diperbarui!";
} else {
    echo "Parameter tidak lengkap. Gunakan: php update.php <id> <title> <author>\n";
    exit;
}
?>