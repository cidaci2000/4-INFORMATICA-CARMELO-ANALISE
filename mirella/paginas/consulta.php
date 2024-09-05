<?php

section_start();

include_once("conexao.php");
$sql="select* from aluno";
$result=$conn->query($sql);
print_r($result);

?>


<?php
while($user_data=mysqli_fetch_assoc ($result))
{
    echo"<tr>"
echo

}

?>