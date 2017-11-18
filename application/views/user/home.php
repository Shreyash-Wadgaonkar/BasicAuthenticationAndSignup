<div class="container main-container">
    <?php if(isset($notification) && $notification!=''){ ?>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="alert alert-info">
                <?php echo $notification; ?>
            </div>
        </div>

    <?php } ?>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center top-100">
        <h3><?php echo($text_welcome);?> <?php echo(isset($this->session->userdata(SESSION_COOKIE)['username'])? $this->session->userdata(SESSION_COOKIE)['username']  : '');?></h3>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
        <?php if(isset($this->session->userdata(SESSION_COOKIE)['session_id'])){ ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Gender</th>
                        <th>Last Login[Registration date]</th>
                        <th>Registration IP</th>
                    </tr>
                    <tr>
                        <td><?php echo $this->session->userdata(SESSION_COOKIE)['username']; ?></td>
                        <td><?php echo $this->session->userdata(SESSION_COOKIE)['email']; ?></td>
                        <td><?php echo $this->session->userdata(SESSION_COOKIE)['firstname']; ?></td>
                        <td><?php echo $this->session->userdata(SESSION_COOKIE)['lastname']; ?></td>
                        <td><?php echo $this->session->userdata(SESSION_COOKIE)['gender']; ?></td>
                        <td><?php echo $this->session->userdata(SESSION_COOKIE)['last_login']; ?></td>
                        <td><?php echo $this->session->userdata(SESSION_COOKIE)['ip']; ?></td>
                    </tr>
                </table>
            </div>
        <?php  } ?>
    </div>
</div>
