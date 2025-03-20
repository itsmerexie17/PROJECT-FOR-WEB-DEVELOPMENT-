<?php
    include('connect.php');

    if(isset($_POST['edit'])){
        $EdId = $_POST['edId'];
        $EdName = $_POST['edName'];
        $EdAge = $_POST['edAge'];
        $EdAddress = $_POST['edAddress'];

    }

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $update = "UPDATE crud_table SET NAME = '$name', AGE=$age, ADDRESS='$address' WHERE ID=$id";
        $sqlUp = mysqli_query($connect, $update);

        echo "<script>alert('Data Updated')</script>";
        echo "<script>window.location.href='index.php'</script>";

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
    <style>
        body{
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
        }
     .updateBTN {
        background: linear-gradient(45deg, #000000, #151515);
        position: relative;
        border-radius: 15px;
        border:solid 5px rgb(65, 64, 64);
        top: 10px;
        display: grid;
        justify-content: center;
        place-items: center;
        height: 400px;
        width: 35%;
     }
     form{
        display: grid;
     }
     label{
        color: white;
        font-weight: 5px bold;
        
     }
     input{
        background-color: transparent;
        border: solid 2px white;
        border-radius: 10px;
        height: 35px;
        color: white;
        width: 200px;
        border-radius: 7px;a
     }
     .update{
        background: black;
        font-weight: bold;
        font-size: 15px;
        position: relative;
        left: 55px;
        width: 100px;
        padding: 5px;
        color: white;
     }
     .back{
        position: relative;
        right: 150px;
        border-radius: 30px;
        border: solid 2px;
        background-color:rgb(65, 64, 64);
        text-decoration: none;
        padding: 7px;
        font-size: 1em;
        font-weight: bold;
        width: 30px;
        height: 20px;
        color: white;
        border-radius: 3px;
        text-align: center;
        
        width: 50px;
        height: 15px;
     }
    </style>    
</head>
<body>
    <div class="updateBTN">
    <a class="back" href="index.php">Back</a>
    <form action="update.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?= $EdName ?>"><br>

        <label for="age">AGE</label>
        <input type="number" name="age" id="age" value="<?= $EdAge ?>"><br>
        
        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="<?= $EdAddress ?>"><br>

        <input type="hidden" name="id" id="id" value="<?= $EdId ?>">
        
        <input class="update" type="submit" name="submit" id="submit" value="Update"><br>
    </form>
    </div>
</body>
</html>
