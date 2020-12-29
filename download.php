
<?php
    //if (isset($_POST['submit'])) {
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="sample.csv"');
        $cn=mysqli_connect("localhost","root","","week3");
        $q="select * from contact_detail";
        $result=mysqli_query($cn,$q);
        $r=mysqli_num_rows($result);

        $head = array("Firstname","Lastname","Phone no","Address");
        $fp = fopen('php://output', 'wb');
        foreach ($head as $line)
        {
            $val = explode(",", $line);
            fputcsv($fp,$val);
        }
        while($data=mysqli_fetch_array($result))
        {
            fputcsv($fp, $data);
        }

        fclose($fp);
    //}

?>