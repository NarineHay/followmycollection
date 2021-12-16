<?php
include "header.php";
include "config/con1.php";
require_once "user-logedin.php";
if(isset($_COOKIE['user']) || isset($_SESSION['user'])){
    if(!empty($_COOKIE['user'])){
        $user_id=$_COOKIE['user'];
    }
    if(!empty($_SESSION['user'])){
        $user_id=$_SESSION['user'];
    }
}


?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/my_checklist.css">
<link rel="stylesheet" type="text/css" href="css/checklist.css">
</head>
<body>
<?php include "cookie.php"; ?>
<section style="height: 100px"></section>
<section class="section1 mt-5">
    <div class="my-5 container" style="min-height: 211px">
        <h2 class="text-center mb-5">CUSTOM CHECKLISTS</h2>
        <div class="add_button">
            <button>+ Add new</button>
        </div>
        <div class="w-100 cards mb-5 " >
        <?php 
        $sql="SELECT * FROM custom_checklist where cid=$user_id";
        $query=mysqli_query($con, $sql);
        $num_rows=mysqli_num_rows($query);
           if($num_rows>0){  
        ?>
            <table class="table" id="checklists" >
                <tbody  >
                    <?php
                        $count = 0;
                            while($row=mysqli_fetch_assoc($query)){
                                $count++;
                                // --- petq e poxel ------------
                                // $tblName=$row['checklist_type'];
                                $tblName='collections';
                                $checklist_name="SELECT base_checklist_name FROM custom_checklist WHERE cid=$row[cid]";
                                $query_checklist_name=mysqli_query($con, $checklist_name);
                                $row_name=mysqli_fetch_assoc($query_checklist_name);
                                echo "<tr data-collId='".$row['id']."' class='tr_checklist'>
                                    <td>".$count."</td>
                                    <td class='info'>".$row_name['base_checklist_name']."</td>
                                    <td class='icons'>
                                        <i class='fa fa-edit'></i>
                                        <i class='fa fa-trash'></i>
                                    </td>
                                </tr>";
                            }
                    ?>
                </tbody>
            </table>
        <?php
        }
         else{
            echo "<div class='text-center'>Nothing found</div>";
        }
        ?>
        </div>
    </div>
    <div class="delete"></div>
</section>
<?php include "footer.php"; ?>

</body>
</html>