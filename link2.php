<?php
declare(strict_types=1);
if (isset($_GET['text'])) {
    $text = $_GET['text'];
    header('Content-Disposition: attachment; filename="saved_text.txt"');
    echo $text;
} else {
    echo "No text provided";
}

//При открытии второй страницы появится диалог сохранения файла, и на локальный компьютер будет сохранён файл txt со строкой текста, переданного в виде параметра text в GET-запросе. Этот GET-параметр должен присутствовать в изначальной ссылке на эту страницу, находящейся на общей странице со ссылками.
?>