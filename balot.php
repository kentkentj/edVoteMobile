<!--html head-->
<?php include 'templates/header.php' ?>
<!--html head end-->

<!-- loader , App Header, Search Component , Search Component -->
<?php include 'templates/toolbar.php' ?>
<!-- * loader , App Header, Search Component , Search Component -->



<!-- App Bottom Menu -->
<?php include 'templates/bottom_menu.php' ?>
<!-- * App Bottom Menu -->

<!-- App Sidebar -->
<?php include 'templates/side_bar.php' ?>
<!-- * App Sidebar -->

<!-- App Capsule -->
<div id="appCapsule">
<div class="listview-title mt-2">For President</div>
        <ul class="listview image-listview">
            <li>
                <div href="#" class="item">
                    <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="image">
                    <div class="in">
                        <div>
                            <header>Name</header>
                            Juan Esteban Sarmiento
                            <footer>California</footer>
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">Option 1</label>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div href="#" class="item">
                    <img src="assets/img/sample/avatar/avatar7.jpg" alt="image" class="image">
                    <div class="in">
                        <div>
                            <header>Name</header>
                            Monica Ribeiro
                            <footer>Paris</footer>
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Option 1</label>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div href="#" class="item">
                    <img src="assets/img/sample/avatar/avatar5.jpg" alt="image" class="image">
                    <div class="in">
                        <div>
                            <header>Name</header>
                            Gaspar Antunes
                            <footer>London</footer>
                        </div>
                        <div class="custom-control custom-radio mb-1">
                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio3">Option 1</label>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
</div>
<!-- * App Capsule -->

   
<script>
    setTimeout(() => {
        notification('notification-welcome', 5000);
    }, 2000);
</script>

<?php include 'templates/footer.php' ?>