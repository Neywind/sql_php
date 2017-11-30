<?php
$con=mysqli_connect("119.23.209.144","root","jh950925");
if(!$con){
    die("Failed to connect the database!");
}else{
    echo "connect to the database successfully<br/>";
}
if(!mysqli_query($con,"create database myblog")){

    mysqli_select_db($con,'myblog');
    mysqli_query($con,'insert into blog(username,password)values("name","123456")');

    mysqli_select_db($con,'myblog');
    $select=mysqli_query($con,'select * from blog where username="name"');
    while($row=mysqli_fetch_array($select)){
        echo "Name:".$row['username']." "."Password:".$row['password']."<br/>";
    }
}
else {

    mysqli_query($con,"create database myblog");

    mysqli_select_db($con, 'myblog');
    mysqli_query($con, "CREATE TABLE blog(
personID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(personID),
username VARCHAR (10),
password VARCHAR (20)
)");

    mysqli_select_db($con, 'myblog');
    mysqli_query($con, 'insert into blog(username,password)values("name","123456")');

    mysqli_select_db($con, 'myblog');
    $select = mysqli_query($con, 'select * from blog where username="name"');
    while ($row = mysqli_fetch_array($select)) {
        echo "Name:" . $row['username'] . " " . "Password:" . $row['password'] . "<br/>";
    }

}

mysqli_close($con);