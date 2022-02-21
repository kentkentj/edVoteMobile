<?php 
try{
    require "../config.php";
	require "../common.php";
	$connection=new PDO($dsn, $username, $password, $options);
   
    /*$school = $_SESSION['school_name'];
    $department = $_SESSION['depatment_name'];*/

	$sql="SELECT * FROM campaigntable WHERE school_id = 'UC-BCF' OR department_id =  1";

	$statement = $connection->prepare($sql);
  	$statement->execute();
	$result_campaign = $statement->fetchAll();

} catch(PDOException $error){
	echo $sql . "<br>" . $error->getMessage();
}
?>
<!--html head-->
<?php include 'templates/header.php' ?>
<!--html head end-->

    <!-- loader , App Header, Search Component , Search Component -->
    <?php include 'templates/toolbar.php' ?>
    <!-- * loader , App Header, Search Component , Search Component -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="header-large-title">
            <h1 class="title">Discover</h1>
            <h4 class="subtitle">Candidates Campaign</h4>
        </div>

        <div class="section full mt-3 mb-3">
            <div class="carousel-multiple owl-carousel owl-theme">

                <div class="item">
                    <div class="card">
                        <img src="assets/img/sample/photo/d1.jpg" class="card-img-top" alt="image">
                        <div class="card-body pt-2">
                            <h4 class="mb-0">Progressive web app ready</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="assets/img/sample/photo/d2.jpg" class="card-img-top" alt="image">
                        <div class="card-body pt-2">
                            <h4 class="mb-0">Reusable components</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="assets/img/sample/photo/d3.jpg" class="card-img-top" alt="image">
                        <div class="card-body pt-2">
                            <h4 class="mb-0">Great for phones & tablets</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="assets/img/sample/photo/d4.jpg" class="card-img-top" alt="image">
                        <div class="card-body pt-2">
                            <h4 class="mb-0">Change the styles in one file</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="assets/img/sample/photo/d6.jpg" class="card-img-top" alt="image">
                        <div class="card-body pt-2">
                            <h4 class="mb-0">Sketch source file included</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="assets/img/sample/photo/d5.jpg" class="card-img-top" alt="image">
                        <div class="card-body pt-2">
                            <h4 class="mb-0">Written with a code structure</h4>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div class="section mt-3 mb-3">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-end">
                    <div>
                        <h6 class="card-subtitle">Discover</h6>
                        <h5 class="card-title mb-0 d-flex align-items-center justify-content-between">
                            Dark Mode
                        </h5>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input dark-mode-switch" id="darkmodeswitch">
                        <label class="custom-control-label" for="darkmodeswitch"></label>
                    </div>

                </div>
            </div>
        </div>

        <!--campaign section start -->
        <?php foreach ($result_campaign as $row) : ?>
        <div class="section mt-3 mb-3">
            <div class="card">
                <img src="<?php echo  $campaign_image_path . escape($row["images"]);?>" class="card-img-top" alt="image">
                <div class="card-body">
                    <h6 class="card-subtitle"><?php echo escape($row["candidate_name"]); ?></h6>
                    <h5 class="card-title"><?php echo escape($row["campaign_post_title"]); ?></h5>
                    <p class="card-text">
                        <?php echo escape($row["caption"]); ?>
                    </p>
                    <a href="app-components.html" class="btn btn-primary">
                        <ion-icon name="cube-outline"></ion-icon>
                        Preview
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <!--campaign section end -->


        <!-- app footer -->
        <div class="appFooter">
            <img src="assets/img/logo.png" alt="icon" class="footer-logo mb-2">
            <div class="footer-title">
                Copyright © Mobilekit 2020. All Rights Reserved.
            </div>
            <div>Mobilekit is PWA ready Mobile UI Kit Template.</div>
            Great way to start your mobile websites and pwa projects.

            <div class="mt-2">
                <a href="javascript:;" class="btn btn-icon btn-sm btn-facebook">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
                <a href="javascript:;" class="btn btn-icon btn-sm btn-twitter">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
                <a href="javascript:;" class="btn btn-icon btn-sm btn-linkedin">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
                <a href="javascript:;" class="btn btn-icon btn-sm btn-instagram">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
                <a href="javascript:;" class="btn btn-icon btn-sm btn-whatsapp">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                </a>
                <a href="#" class="btn btn-icon btn-sm btn-secondary goTop">
                    <ion-icon name="arrow-up-outline"></ion-icon>
                </a>
            </div>

        </div>
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
    <?php include 'templates/bottom_menu.php' ?>
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    <?php include 'templates/side_bar.php' ?>
    <!-- * App Sidebar -->


    <!-- welcome notification  -->
    <div id="notification-welcome" class="notification-box">
        <div class="notification-dialog android-style">
            <div class="notification-header">
                <div class="in">
                    <img src="assets/img/icon/72x72.png" alt="image" class="imaged w24">
                    <strong>Mobilekit</strong>
                    <span>just now</span>
                </div>
                <a href="#" class="close-button">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <div class="notification-content">
                <div class="in">
                    <h3 class="subtitle">Welcome to Mobilekit</h3>
                    <div class="text">
                        Mobilekit is a PWA ready Mobile UI Kit Template.
                        Great way to start your mobile websites and pwa projects.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * welcome notification -->
    
    <script>
        setTimeout(() => {
            notification('notification-welcome', 5000);
        }, 2000);
    </script>

<?php include 'templates/footer.php' ?>