<?php
include("raw/connect.php");

if (isset($_GET['searchbtn'])) {
    $input = mysqli_real_escape_string($conn, $_GET['searchinput']);
    $in= strtoupper($input);
    $sqlsafety = "Select * from health WHERE title LIKE  '%$in%'";
}
else{
    $sqlsafety = "Select * from health ";
}
if(isset($_GET['resetbtn'])){
    header("location: health.php");
}



$find = $conn->query($sqlsafety);

//Original code
/*while($res = $find->fetch_assoc()){
echo $res["station"];
echo $res["phone"];
}*/
//Original code
?>

<?php include 'global/header.php' ?>


<div class="container">

    <div class="col-md-6">
        <h2> Girls Health Tips</h2>
    </div>
    <div class="col-md-6">
        <div class="search-container"  style="float: right">
            <form method="get" action="health.php">
                <input class="form-control"  type="text" placeholder="Search Health Tips" name="searchinput" >
                <div style="margin-top: 5px;">
                    <button class="btn btn-default"  style="float: right" name="searchbtn"  type="submit" style="border: greenyellow"> <i class="fa fa-search" ></i></button>
                    <button class="btn btn-default" name="resetbtn"  type="submit" style="border-color: red"> Reset</button>
                </div>

            </form>
        </div>
    </div>


    <div class="text-center center-block" style="height: 320px;">
        <div class="row col-md-12  mygrid">
            <div class="container gridpad">

                <?php while ($res = $find->fetch_assoc()) { ?>
                    <div class="col-md-4 col-sm-4 col-xs-12 img1">
                        <img src="assets/images/women.png" alt="">
                        <h1><?php echo $res["title"]; ?></h1>
                        <p style="color: #cd7000">
                            <?php echo  $res["tips"]; ?>
                        </p>
                    </div>

                <?php } ?>


            </div>
        </div>
    </div>

</div>


<?php include 'global/footer.php' ?>
