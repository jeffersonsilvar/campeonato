<!--- Header ---->

<div id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 wow bounceInLeft">
                <h1>Responsive Web Design</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
                <button class="btn btn-lg btn-success" data-toggle="modal" data-target="#myModal">LEIA MAIS</button>
            </div>

            <div class="col-lg-6 col-md-6 wow bounceInRight">
                <img  src="<?php echo base_url(); ?>assets/images/Responsive-Web-Design.png" alt="">
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&timesbar;</button>
                <h4 class="modal-title">Concurso Seja Um Inventor Uninassau</h4>
            </div>
            <div class="modal-body">
                Example Explained
                The "Trigger" part:

                To trigger the modal window, you need to use a button or a link.

                Then include the two data-* attributes:

                data-toggle="modal" opens the modal window
                data-target="#myModal" points to the id of the modal
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
            </div>
        </div>

    </div>
</div>

<!--Fim Modal -->

<!---- End Header ---->