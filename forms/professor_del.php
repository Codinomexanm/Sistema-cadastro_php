<?php
$id=$_GET['id'];
$sql = "DELETE FROM professor WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    //echo 'Professor exluido com sucesso';
    echo '<script>window.history.go(-1)</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


