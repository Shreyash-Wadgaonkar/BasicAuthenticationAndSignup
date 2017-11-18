<div class="container main-container">
    <?php if(isset($notification) && $notification!=''){ ?>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="alert alert-info">
                <?php echo $notification; ?>
            </div>
        </div>

    <?php } ?>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center top-100">
        <h3><?php echo($text_welcome);?></h3>
    </div>



    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <table class="table-bordered">
                <tr>
                    <td></td>
                </tr>
            </table>
    </div>




</div>
