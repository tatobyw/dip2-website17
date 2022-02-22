<?php include('../admin/config/dbcon.php'); ?>

<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>
<?php include("includes/headertop.php"); ?>



<div class="container mt-5 text-center">
    <h4 class=" text-secondary">วิทยาลัยเทคนิคตราด</h4>
    <h5>
        <p class="text-success">“ข่าสารทั้งหมด”</p>
    </h5>
</div>



<!--ภาพข่าวกิจกรรม-->
<div class="container mb-2 mt-1">
    <div class="row">

        <?php
        $no = 0;
        $sql = "select * from hotnews order by id desc";
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);
        if ($num > 0) {

            while ($rs = mysqli_fetch_array($result)) {
                $id = $rs['id'];
                $date = $rs['date'];
                $head = $rs['head'];
                $detail = $rs['detail'];
                $namepic = $rs['namepic'];
                $namedoc = $rs['namedoc'];
                $hotcount = $rs['hotcount'];
                $design = $rs['design'];
                $time = $rs['time'];

                $no++;
                echo "
		<div class='col-sm-3'>
			<div class='card'>
                    <div class='card-body'>
                        <img class='card-img-top' src='images/logotrat.png'>
                        <hr />
                    </div>
                    
                    <div class='card-title'>
                        <h5 class='card-title text-bold mx-3 text-success'>หัวข้อข่าว</h5>
                        <p class='card-title mx-3'>$head</p>
                        <div class='underline ml-auto mb-2'></div>
                        <h5 class='card-title mx-3 text-success'>รายละเอียด</h5>
                        <p class='card-text mx-3'>$detail</p>
                        <img src='./admin/upload/hotnew_images/$namepic' class='card-img-top' style='width:100%'>
                        <a href='hotnews.php?id=$id' target='_blank'>
                            <div class='mask rgba-white-slight'></div>
                        </a>
                    </div>

				<div class='card-footer rounded-bottom bg-primary text-white text-center pt-3'>
					<ul class='list-unstyled list-inline font-small'>
						<li class='list-inline-item pr-2 white-text'><i class='far fa-clock pr-1'></i>$date</li>
						<li class='list-inline-item pr-2'><i class='far fa-comments pr-1'></i>$num</li>
						<li class='list-inline-item text-white'>count <i class='fas fa-user-friends fa-sm mr-1'></i>$hotcount1</li>
					</ul>
				</div>
			</div>
	  </div>  
		";
            }
        }
        ?>
    </div>
</div>
<!--ภาพข่าวกิจกรรม-->

<div class="container mt-5">

    <hr>
</div>


<?php include("includes/footer.php"); ?>