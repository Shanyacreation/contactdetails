<!DOCTYPE html>
<html>
<head>
    <title>download</title>
</head>
<body>
    <table cellpadding="2" cellspacing="2" width="1000px" height="20px"  style="margin:auto">
        <th>
            <td><a href="index.php">ADD USER</a></td>
            <td><a href="view.php">VIEW</a></td>
            <td><a href="update.php">UPDATE</a></td>
            <td><a href="delete.php"> DELETE</a></td>
            <td><a href="download.php">DOWNLOAD</a></td>
        </th>
    </table>
    <form method="post">
        <input type="submit" name="submit" value="download">
    </form>

</body>
</html>
<?php
    if (isset($_POST['submit'])) {
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="sample.csv"');
        $cn=mysqli_connect("localhost","root","","week3");
        $q="select * from contact_detail";
        $result=mysqli_query($cn,$q);
        $r=mysqli_num_rows($result);
        $data1 = array(
                'aaa,bbb,ccc,dddd',
                '123,456,789',
                '"aaa","bbb"'
        );

        $fp = fopen('php://output', 'wb');
        while($data=mysqli_fetch_array($result))
        {
            fputcsv($fp, $data);
        }

        fclose($fp);
    }

?>
