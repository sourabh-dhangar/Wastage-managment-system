<?php
$username="root";
$password="";
$server="localhost";
$database='donation';
$con1=mysqli_connect($server,$username ,$password,$database);
if($con1)
{
    ?>
<script>
alert('Working');
</script>
<?php
}
?>