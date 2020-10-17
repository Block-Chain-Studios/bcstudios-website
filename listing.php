<?php include 'header.php'; ?>

<!-- Call to Action -->
<section class="listing">
    <img src="img/listing-bg.jpg" alt="form" class="background-img" />

    <div class="logo_wrapper float_right">
        <a href="http://socialblock.amplewebsites.com/wyldwest" class="logo-img-wrapper" target="_blank">
            <img src="img/listing-logo.jpg" class="logo" alt="logo" />
        </a>
    </div>

    <div class="popup_image">
        <div class="img1">
            <a href="/map">
                <img src="img/listing-map.jpg" alt="map" />  
            </a>
        </div>
        <div class="img2">
            <a href="/image1">
                <img src="img/listing-img.jpg" alt="image" />
            </a>
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01" />
    </div>
</section>
<a href="javascript:history.back()" class="btn btn-primary" id="zBackBtn">&#8592; Back</a>

<?php include 'footer.php'; ?>