<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script defer src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>
    <title>LIBRARY MANAGEMENT</title>
    <link href='https://fonts.googleapis.com/css?family=Be Vietnam Pro' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>



    <center><h1 style="color:#bb0000">LIBRARY MANAGEMENT</h1></center>
    <h2 id = "msg"></h2>
    <input type="text" id="search" placeholder="Search here..!">
    <div class="container">
        <label for="fname">Enter First name : </label>
            <input type="text" id="fname"><br>
           <label for="lname">Enter Last name : </label>
            <input type="text" id="lname"><br>
            <label for="bname">Enter Book name :</label>
            <input type="text" id="bname"><br>
            <button id="submitBtn">SUBMIT</button>
    </div>
    <div id="show_records">
        <table id="heading">    
            <tr style="positon:fixed;top:1px;">
                <th style="width:5%">S. NO.</th>
                <th style="width:5%">User ID</th>
                <th style="width:25%">Name</th>
                <th style="width:15%">Date issued<br>YYYY/MM/DD</th>
                <th style="width:35%">Book Name</th>
                <th>Action</th>
            </tr>
        </table>
        <table id = "records">
            
            
           
        </table>
    </div>



    </body>
<script> 


    function deleteRecords(deleteid){
        var conf = confirm("Are you sure.?");
        if(conf){
            $.ajax({
            url:'backend.php',
            type:'POST',
            data:{
                deleteid:deleteid,
            },
            success:function(){
                // alert("Entry Deleted..!");
                readRecords();
            }
        })
    }
    }

    $("#search").keyup(function(){
        var search_val = $(this).val();
        $.ajax({
            url:'backend.php',
            type:'POST',
            data:{
                search_val:search_val,
            },
            beforesend:function(){
                $("#records").html("<tr><td>Searching...</td></tr>");
            },
            success:function(data){
                $("#records").html(data);
            }
        })
    })
    function readRecords() {
        var readRecords = "readRecords";
        $.ajax({
            url:'backend.php',
            type:'POST',
            data:{
                readRecords:readRecords,
            },
            success:function(data){
                $("#records").html(data);
            }
        })
    }

    $(document).ready(function(){
        readRecords();
    $("#submitBtn").click(function(){
        if ($("#fname").val()=="" || $("#lname").val()=="" ||$("#bname").val()=="") {
            alert("Please fill all DATA");   
        }else{
                $.ajax({
                    url:'backend.php',
                    type:'POST',
                    data:{
                    fname:$("#fname").val(),
                    lname:$("#lname").val(),
                    date:$("#date").val(),
                    bname:$("#bname").val(),
                },
                success:function(data){
                    $("#msg").html(data);
                    $("#fname").val(""),
                    $("#lname").val(""),
                    $("#date").val(""),
                    $("#bname").val(""),
                    alert("Data inserted succcessfully");
                    readRecords();
                }
            })
        }
    })
})
    

</script>
<script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</html>