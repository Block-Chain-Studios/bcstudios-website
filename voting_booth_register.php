<?php include 'header.php'; ?>
<?php include 'voting_booth_header.php'; ?>

<section class="voting_booth">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p class="orange text-center">If You Have Lost Your Voter Registration I.D. Token Password Click Here.</p>

                <img src="img/voting_booth_form.jpg" alt="voting booth form" style="margin-bottom: 35px;" />

                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Return to Your County Website
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Submit Voter Documents
                                </button>
                            </h5>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<a href="javascript:history.back()" class="btn btn-primary" id="zBackBtn">&#8592; Back</a>

<?php include 'footer.php'; ?>