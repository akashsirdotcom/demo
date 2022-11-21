
<?php
$connection = mysqli_connect("localhost", "root", "", "db_demo");
$q = mysqli_query($connection, "select * from tbl_student")or die("Error in query" . mysqli_error($connection));

dmodemode
$count = mysqli_num_rows($q);
echo "$count Records Found";
echo "<table border='1'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Age</th>";
echo "<th>Mobile No</th>";
echo "<th>Hobby</th>";
echo "<th>Bdate</th>";
echo "<th>Email</th>";
echo "<th>Password</th>";
echo "<th>Address</th>";
echo "<th>Area</th>";
echo "<th>Pincode</th>";
echo "<th>Photo</th>";
echo "<th>Action</th>";
echo "<th>Action</th>";
echo "</tr>";
while ($row = mysqli_fetch_array($q)) {
    echo "<tr>";
    echo "<td>{$row['st_id']}</td>";
    echo "<td>{$row['st_name']}</td>";
    echo "<td>{$row['st_gender']}</td>";
    echo "<td>{$row['st_age']}</td>";
    echo "<td>{$row['st_mobileno']}</td>";
    echo "<td>{$row['st_hobby']}</td>";
    echo "<td>{$row['st_Bdate']}</td>";
    echo "<td>{$row['st_email']}</td>";
    echo "<td>{$row['st_password']}</td>";
    echo "<td>{$row['st_address']}</td>";
    echo "<td>{$row['st_area']}</td>";
    echo "<td>{$row['st_pincode']}</td>";
    echo "<td><img src='./{$row['st_photo']}' style='width:100px'></td>";
   
    echo "<td><a href='data-view.php?did={$row['st_id']}'>Delete</a></td>";
     echo "<td><a href='data-edit.php?eid={$row['st_id']}'>Edit</a></td>";
    echo "</tr>";
}
echo "</table>";
