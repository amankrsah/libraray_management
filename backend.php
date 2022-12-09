<?php   
        $conn = mysqli_connect("localhost","root","","aman_lib");
        if(!$conn){
            die("Cannot connet to DATABASE");
        }

    if (isset($_POST['fname']) && isset($_POST['bname'])){
        $fname=$_POST['fname'];     

        $bname=$_POST['bname'];

        $qry = "INSERT INTO `lib` (`fname`, `bname`) VALUES ('$fname', '$bname')";
        $result = mysqli_query($conn,$qry);


    }

    if(isset($_POST['deleteid'])){
        $userid = $_POST['deleteid'];
        $deleteQuery = "DELETE FROM `lib` WHERE uid='$userid'";
        mysqli_query($conn,$deleteQuery);

    }
   
    if(isset($_POST['search_val'])){
        $search_val = $_POST['search_val'];
        $searchQuery = "SELECT * FROM `lib` WHERE fname LIKE '%$search_val%' OR bname LIKE '%$search_val%'";
        $result = mysqli_query($conn,$searchQuery);
        $data="";
        if (mysqli_num_rows($result)>0) {
            $number =1;
            while($row=mysqli_fetch_array($result)){
                $data.='<tr>
                <td style="width:5%">'.$number.'</td>
                <td style="width:5%">'.$row['uid'].'</td>
                <td style="width:25%">'.$row['fname'].'</td>
                <td style="width:15%">'.$row['date'].'</td>
                <td style="width:35%">'.$row['bname'].'</td>
                <td class = "delete" id = "deleteBtn" onclick="deleteRecords('.$row['uid'].')">DELETE</td>
            </tr>';
            $number++;
            }
        }else{
            $data.='<tr><td>No Records Found.</td></tr>';
        }
        echo $data;
    }


     

    if(isset($_POST['readRecords'])){
        $data="";
        $showQuery = 'SELECT * FROM `lib`';
        $result = mysqli_query($conn,$showQuery);
        if (mysqli_num_rows($result)>0) {
            $number=1;
            while($row=mysqli_fetch_array($result)){
                $data.='<tr>
                <td style="width:5%">'.$number.'</td>
                <td style="width:5%">'.$row['uid'].'</td>
                <td style="width:25%">'.$row['fname'].'</td>
                <td style="width:15%">'.$row['date'].'</td>
                <td style="width:35%">'.$row['bname'].'</td>
                <td class = "delete" id = "deleteBtn" onclick="deleteRecords('.$row['uid'].')">DELETE</td>
            </tr>';
            $number++;
            }
        }else{
            $data.='<tr><td>No Book Issued</td></tr>';
        }
        echo $data;
    }
?>