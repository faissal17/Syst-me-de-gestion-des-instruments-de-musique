<?php
require('database.php');

session_start();
if(isset($_POST['submit']))     inser();
if(isset($_POST['login']))     inser2();
if(isset($_POST['save']))     instrument();
if(isset($_GET['id']))     deleteTask();
if(isset($_POST['edit']))     update();



function getinser(){
    $requet="SELECT * FROM `instrument`";
    global $conn;
    $query=mysqli_query($conn,$requet);

    while($rows=mysqli_fetch_assoc($query)){
    $id = $rows['id'];
echo 
'<div class="card border-dark" style="width: 18rem">
<div class="h6 modal-id">'.$rows['id'].'</div>
<img src="'.$rows["img"].'" class="card-img-top" />
<div class="card-body">
      <h2 data="'.$rows['title'].'"  id="titlee'.$id.'">'.$rows['title'].'
         </h2>
              <h4 data="'.$rows['price'].'" id="prixx'.$id.'">$ '.$rows['price'].'
         </h4>
       <h5 data="'.$rows['quantity'].'" id="quaa'.$id.'">'.$rows['quantity'].'
     </h4>
        <p data="'.$rows['description'].'" id="desss'.$id.'">'.$rows['description'].'
    </p>
        <p data="'.$rows['date'].'" id="datee'.$id.'">
        '.$rows['date'].'
        </p>
        <a href=data-bs-toggle="modal" data-toggle="modal" data-target="#exampleModal1" onclick="editinst('.$id.')" class="btn btn-info">edit</a>
<a href="scripts.php?id= '.$rows["id"].'" class="btn btn-primary">delete</a>
</div>
</div>';
    }
}






function inser()
{
 
    $name =$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

//CODE HERE
$insert="INSERT INTO singup(`name`, `email`, `password`) VALUES ('$name','$email','$password')";

global $conn;
mysqli_query($conn,$insert);
header('location:music.php');

}

function inser2(){
    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
    
        global $conn;
    
        $requet = "SELECT * FROM singup WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn,$requet);
        // echo "<pre>";
        // print_r($result);
        // echo "</pre>";
        // die;
        $rows=mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result)>0){
            $_SESSION['name']=$rows['name'];
            $_SESSION['id']=$rows['id'];
            header("Location:music.php");
        }
    
        else
        {
        echo "incorrect inputs";
        header("Location:login.php");
        }
    
    }

}

function instrument(){

//image save file
$img=$_FILES['img']['name'];
$tmp_img_name=$_FILES['img']['tmp_name'];
$folder='image_uploaded/'.$img;
move_uploaded_file($tmp_img_name,$folder);
//end image save file

    $title=$_POST['title'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $date=$_POST['date'];
    $description=$_POST['description'];
    $img=$_POST['img'];

//CODE HERE

    $requet="INSERT INTO instrument(`title`, `price`, `quantity`, `date`, `description`,`img`) 
    VALUES ('$title','$price','$quantity','$date','$description','$folder')";

global $conn;
mysqli_query($conn,$requet);
header('location:music.php');
$_SESSION['message'] = "instrument has been added successfully !";

}

function update(){
    $update=$_POST['idd'];
    $title=$_POST['title1'];
    $price=$_POST['price1'];
    $quantity=$_POST['quantity1'];
    $date=$_POST['date1'];
    $description=$_POST['description1'];

    $requete="UPDATE `instrument` SET `title`='$title',`price`='$price',`quantity`='$quantity',`date`='$date]',`description`='$description'WHERE id=$update";

    global $conn;
    mysqli_query($conn,$requete);
    $_SESSION['message'] = "instrument has been updated successfully !";
		header('location: music.php');

}





function deleteTask()
    {
        //CODE HERE
       global $id,$conn;
       $id=$_GET['id'];
       $requete= "DELETE FROM instrument WHERE id='$id'";
       $query=mysqli_query($conn,$requete);
       if(isset($query))
        //SQL DELETE
        $_SESSION['message'] = "instrument has been deleted successfully !";
		header('location: music.php');
    }




    // compared 

?>
