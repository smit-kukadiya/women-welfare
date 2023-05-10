<?php
include "session.php";
// including the database connection file
include "config.php";

if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    
    $title=$_POST['title'];
    $descri=$_POST['descri'];
    $doc=$_POST['doc']; 
    $obj=$_POST['obj']; 
    
    // checking empty fields
    if(empty($title) || empty($descri) || empty($doc) || empty($obj)) {          
        if(empty($title)) {
            echo "<font color='red'>Title field is empty.</font><br/>";
        }
        
        if(empty($descri)) {
            echo "<font color='red'>Descri field is empty.</font><br/>";
        }
        
        if(empty($doc)) {
            echo "<font color='red'>Document field is empty.</font><br/>";
        } 
        
        if(empty($obj)) {
            echo "<font color='red'>Objective field is empty.</font><br/>";
        } 
    } else {    
        //updating the table
        $result = mysqli_query($conn, "UPDATE schemes SET title='$title',descri='$descri',doc='$doc', obj='$obj' WHERE no=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: billing.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM schemes WHERE no=$id");

while($res = mysqli_fetch_array($result))
{
    $title = $res['title'];
    $descri = $res['descri'];
    $doc = $res['doc'];
    $obj = $res['obj'];
}
?>
<html>
<head>  
    <title>Edit Data</title>
</head>

<body>
    <br/><br/>
    
    <form name="form1" method="post" action="editScheme.php">
        <table border="0">
            <tr> 
                <td>Title</td>
                <td><input type="text" name="title" value="<?php echo $title;?>"></td>
            </tr>
            <tr> 
                <td>Description</td>
                <td><input type="text" name="descri" value="<?php echo $descri;?>"></td>
            </tr>
            <tr> 
                <td>Document</td>
                <td><input type="text" name="doc" value="<?php echo $doc;?>"></td>
            </tr>
            <tr> 
                <td>Objectitves</td>
                <td><input type="text" name="obj" value="<?php echo $obj;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>