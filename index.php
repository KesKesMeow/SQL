<?php
/* header ('Content-Type: text/html; charset = utf-8'); */
include 'connect.php';
$sql = 'select * from books';
$res = mysqli_query($connect, $sql);
?>

<html>
<head>
    <title>Books</title>
    <meta charset="utf-8">
</head>
<body>
<table>
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Author</td>
        <td>Year</td>
        <td>Isbn</td>
        <td>Genre</td>
    </tr>

<?php
while ($data = mysqli_fetch_assoc($res)) { ?>
    <tr>
            <td> <?php echo $data['id']; ?> </td>
            <td> <?php echo $data['name']; ?> </td>
            <td> <?php echo $data['author']; ?> </td>
            <td> <?php echo $data['year']; ?> </td>
            <td> <?php echo $data['isbn']; ?> </td>
            <td> <?php echo $data['genre']; ?> </td>
    </tr>
<?php }

?>