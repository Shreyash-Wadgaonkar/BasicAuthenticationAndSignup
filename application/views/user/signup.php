<div class="container main-container">
    <?php if(isset($notification) && $notification!=''){ ?>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="alert alert-info">
                <?php echo $notification; ?>
            </div>
        </div>

    <?php } ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3><?php echo($text_signup);?><br><small> <?php  echo($text_signup_description); ?></small></h3>
    </div>
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 no-pad">
    <?php echo form_open('signup/process'); ?>
        <div class="form-group">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pad">
                <label class="label-control col-lg-2 col-md-2 col-sm-3 col-xs-12"><span><?php echo($text_email);?></span></label>
                <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 field">
                    <input type="email" class="form-control" placeholder="" name="email" id="email"  data-validation="email" data-validation-error-msg-container="#email-error" required>
                    <span class="form-error"><?php echo form_error('email'); ?></span>
                    <span id="email-error" class="form-error"></span>
                </div>
            </div>
        </div>

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
                    <input type="password" class="form-control" placeholder="" name="password" id="password"   data-validation="length strength"
                           data-validation-strength="4"
                           data-validation-length="4-60"
                           data-validation-error-msg-container="#password-error"
                           required>
                    <span class="form-error"><?php echo form_error('password'); ?></span>
                    <span id="password-error" class="form-error"></span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pad">
                <label class="label-control col-lg-2 col-md-2 col-sm-3 col-xs-12"><span><?php echo($text_firstname);?></span></label>
                <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 field">
                    <input type="text" class="form-control" placeholder=""  name="firstname" id="firstname"  data-validation="length custom"
                           data-validation-length="4-20"
                           data-validation-error-msg="Firstname has to be an alphabetic value (4-20 chars)"
                           data-validation-error-msg-container="#firstname-error"
                           data-validation-regexp="^([a-zA-Z]+)$"
                           required>
                    <span class="form-error"><?php echo form_error('firstname'); ?></span>
                    <span id="firstname-error" class="form-error"></span>
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pad">
                <label class="label-control col-lg-2 col-md-2 col-sm-3 col-xs-12"><span><?php echo($text_lastname);?></span></label>
                <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 field">
                    <input type="text" class="form-control" placeholder="" name="lastname" id="lastname"  data-validation="length custom"
                           data-validation-length="4-20"
                           data-validation-error-msg="Lastname has to be an alphabetic value (4-20 chars)"
                           data-validation-error-msg-container="#lastname-error"
                           data-validation-regexp="^([a-zA-Z]+)$"
                           required>
                    <span class="form-error"><?php echo form_error('email'); ?></span>
                    <span id="lastname-error" class="form-error"></span>
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pad">
                <label class="label-control col-lg-2 col-md-2 col-sm-3 col-xs-12"><span><?php echo($text_gender);?></span></label>
                <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 pad-top-6">

                    <?php echo($text_male);?>  &nbsp; <input type="radio"  class="v-align-sub" name="gender" id="g1" value="male" checked>
                    &nbsp;&nbsp;
                    <?php echo($text_female);?> &nbsp;  <input type="radio" class="v-align-sub" name="gender" id="g2" value="female">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <button type="submit" class="btn btn-primary">Signup</button>
            </div>
        </div>
        </form>
    </div>

</div>
<script>
    $(document).ready(function(){

        $.validate({
            modules : 'security',

        });
    });
</script>