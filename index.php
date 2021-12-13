<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Введіть ПІБ українською: <input type="text" name="name"><br>
    <input type="submit">
</form>
<?php
if (!empty($_POST['name'])) {
    $name = $_POST['name'];
    $pattern = '/^\s*[аАбБвВгГҐґдДеЕєЄжЖзЗиИіІїЇйЙкКлЛмМнНоОпПрРсСтТуУфФхХцЦчЧшШщЩьЬюЮяЯ\'\-]+\s+[аАбБвВгГҐґдДеЕєЄжЖзЗиИіІїЇйЙкКлЛмМнНоОпПрРсСтТуУфФхХцЦчЧшШщЩьЬюЮяЯ\'\-]+\s+[аАбБвВгГҐґдДеЕєЄжЖзЗиИіІїЇйЙкКлЛмМнНоОпПрРсСтТуУфФхХцЦчЧшШщЩьЬюЮяЯ\'\-]+\s*$/u';
    if (preg_match($pattern, $name)) {
        
        echo "Ім'я правильне";
    } else {
        
         echo "Ім'я неправильне";
    }
}
?>

</body>
</html>
