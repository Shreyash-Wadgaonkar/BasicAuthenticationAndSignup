<div class="container main-container">
    <?php if(isset($notification) && $notification!=''){ ?>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="alert alert-info">
                <?php echo $notification; ?>
            </div>
        </div>

    <?php } ?>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center top-100">
        <h3><?php echo($text_login);?></h3>
    </div>



    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 no-pad force-center">



            <?php echo form_open('login/process'); ?>
            <div class="form-group">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pad">
                    <label class="label-control col-lg-2 col-md-2 col-sm-3 col-xs-12"><span><?php echo($text_username);?></span></label>
                    <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 field">
                        <input type="text" class="form-control" placeholder=""  name="username" id="username" data-validation="length alphanumeric"
                               data-validation-length="3-12"
                               data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)"
                               data-validation-error-msg-container="#username-error"
                               required>
                        <span class="form-error"><?php echo form_error('username'); ?></span>
                        <span id="username-error" class="form-error"></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pad">
                    <label class="label-control col-lg-2 col-md-2 col-sm-3 col-xs-12"><span><?php echo($text_password);?></span></label>
                    <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 field">
                        <input type="password" class="form-control" placeholder="" name="password" id="password"   data-validation="length"
                               data-validation-length="4-60"
                               data-validation-error-msg-container="#password-error"
                               required>
                        <span class="form-error"><?php echo form_error('password'); ?></span>
                        <span id="password-error" class="form-error"></span>
                    </div>
                </div>
            </div>



            <div class="form-group">
                <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-10 col-md-10 col-sm-10 col-xs-12 text-center">
                    <button type="submit" class="btn btn-primary signup-btn">Signup</button>
                </div>
            </div>
            </form>
        </div>


    </div>

</div>
<script>
    $(document).ready(function(){

        $.validate({
            modules : 'security',

        });
    });
</script>