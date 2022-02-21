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
    <!-- Media Multi Listview -->
    <div class="listview-title mt-2"><h3>Upcomming Elections</h3></div>
         <ul class="listview image-listview media mb-2">     
             <?php foreach ($result_campaign_ as $row) : ?>
             <li>
                <a href="balot?electionid=<?php echo escape($row["election_id"]); ?>" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="archive-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div><?php echo escape($row["election_name"]); ?></div>
                        <span class="text-muted"><?php echo escape($row["depatment_name"]); ?></span>
                        <span class="text-muted"><?php echo escape($row["start_election_date"]); ?> to <?php echo escape($row["end_election_date"]); ?></span>
                    </div>
                </a>
            </li>
            <?php endforeach; ?>
         </ul>
         <!-- * Media Multi Listview -->

</div>
<!-- * App Capsule -->

   
<script>
        setTimeout(() => {
            notification('notification-welcome', 5000);
        }, 2000);
    </script>

<?php include 'templates/footer.php' ?>