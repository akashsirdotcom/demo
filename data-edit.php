<?php
$connection = mysqli_connect("localhost", "root", "", "db_demo");
$editid = $_GET['eid'];
if (!isset($_GET['eid']) || empty($_GET['eid'])) {
    header("location:data-view.php");
}
$selectquery = mysqli_query($connection, "select * from tbl_student where st_id='{$editid}'")or die(mysqli_error($connection));
$selectrow = mysqli_fetch_array($selectquery);
if ($_POST) {
    $st_name = $_POST['st_name'];
    $st_gender = $_POST['st_gender'];
    $st_age = $_POST['st_age'];
    $st_mobileno = $_POST['st_mobileno'];
    $st_hobby = $_POST['st_hobby'];
    $st_Bdate = $_POST['st_Bdate'];
    $st_email = $_POST['st_email'];
    $st_password = $_POST['st_password'];
    $st_address = $_POST['st_address'];
    $st_area = $_POST['st_area'];
    $st_pincode = $_POST['st_pincode'];
    $uq = mysqli_query($connection, "update tbl_student set st_name='{$st_name}',st_gender='{$st_gender}',st_age='{$st_age}',st_mobileno='{$st_mobileno}',st_hobby='{$st_hobby}',st_Bdate='{$st_Bdate}',st_email='{$st_email}',st_password='{$st_password}',st_address='{$st_address}',st_area='{$st_area}',st_pincode='{$st_pincode}',st_photo='st_photo'where st_id='{$_GET['eid']}'")or die(mysqli_error($connection));
    if ($uq) {
        header("location:data-edit.php");
    }
}
?>
<html>
    <body>
        <form method="Post">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text"value="<?php echo $selectrow['st_name']; ?>" name="st_name"/></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input type="text"value="<?php echo $selectrow['st_gender']; ?>" name="st_gender"/></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type="number"value="<?php echo $selectrow['st_age']; ?>" name="st_age"/></td>
                </tr>

                <tr>
                    <td>Mobile no</td>
                    <td><input type="number"value="<?php echo $selectrow['st_mobileno']; ?>" name="st_mobileno" /></td>
                </tr>

                <tr>
                    <td>Hobby</td>
                    <td><input type="text"value="<?php echo $selectrow['st_hobby']; ?>" name="st_hobby"/></td>
                </tr>

                <tr>
                    <td>B'date</td>
                    <td><input type="text" value="<?php echo $selectrow['st_Bdate']; ?>"name="st_Bdate"/></td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td><input type="text"value="<?php echo $selectrow['st_email']; ?>" name="st_email"/></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td><input type="text" value="<?php echo $selectrow['st_password']; ?>"name="st_password"/></td>
                </tr>

                <tr>
                    <td>Address</td>
                    <td><input type="text"value="<?php echo $selectrow['st_address']; ?>" name="st_address" /></td>
                </tr>
                <tr>
                    <td>Area</td>
                    <td><input type="text" value="<?php echo $selectrow['st_area']; ?>"name="st_area" /></td>
                </tr>
                <tr>
                    <td>Pincode</td>
                    <td><input type="number" value="<?php echo $selectrow['st_pincode']; ?>"name="st_pincode" /></td>
                </tr>
                 <tr>
                    <td>Photo</td>
                    <td><input type="file" value="<?php echo $selectrow['st_photo']; ?>"name="file123" /></td>
                </tr>
                <tr>
                    <td><input type="Submit" value="update"/></td>
                </tr>  
            </table>
        </form>
    </body>
</html>
