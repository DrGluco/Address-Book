<!-- Register Start-->
            <div class="login-form-area mg-t-30 mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <form id="adminpro-register-form" class="adminpro-form" action="<?php echo site_url('Welcome/Save_Changes') ?>" method="post">
                            <div class="col-lg-6">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="logo">
                                                 <img src="<?php echo base_url('assets/img/profile/user.png');?>" alt="" />
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <input type="text" name="id" value="<?php echo $my_contact->contact_id; ?>" hidden>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Full Name</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            
                                                    <div class="login-input-area ">
                                                        <input type="text" name="first_name" value="<?php if(is_object($my_contact)): ?>
      <?php echo "$my_contact->contact_name";?>
     <?php else: ?>
    Unrecognised User 
    <?php endif; ?>" />
                                                        <i class="fa fa-user login-user"></i>
                                                    </div>
                                               
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Surname</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="surname" value="<?php if(is_object($my_contact)): ?>
      <?php echo "$my_contact->contact_lname";?>
     <?php else: ?>
    Unrecognised User 
    <?php endif; ?>" />
                                                <i class="fa fa-user login-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Primary Email Address</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="email" name="email" value="<?php if(is_object($my_contact)): ?>
      <?php echo "$my_contact->contact_email";?>
     <?php else: ?>
    Unrecognised User 
    <?php endif; ?>"/>
                                                <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Primary Phone</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="phone" value="<?php if(is_object($my_contact)): ?>
      <?php echo "$my_contact->contact_phone_number";?>
     <?php else: ?>
    Unrecognised User 
    <?php endif; ?>"/>
                                                <i class="fa fa-phone login-user"></i>
                                            </div>
                                        </div>
                                    </div>
                               
                                    <div class="row">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-8">
                                            <div class="login-button-pro">
                                                <a href="<?php echo site_url('Welcome/') ?>" class="btn btn-danger">Cancel</a>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
            <!-- Register End-->
        </div>
    </div>