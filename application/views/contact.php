<div class="data-table-area mg-b-8 content-inner-all">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Contact <span class="table-project-n">Details</span></h1>
                            <div class="sparkline13-outline-icon">
                                <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                <span><i class="fa fa-wrench"></i></span>
                                <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="user-profile-area content-inner-all">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="user-profile-wrap shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="user-profile-img">
                                                    <img src="<?php echo base_url('assets/img/profile/user.png');?>" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                            <?php if(is_array($my_contact)): ?>
                                             <?php foreach ($my_contact as $my_contact): ?> 
                                                 <div class="user-profile-content">
                                                    <h2><?php echo $my_contact->contact_name; ?> <?php echo $my_contact->contact_lname; ?></h2>
                                                    <p class="profile-founder"><?php echo $my_contact->contact_email; ?>
                                                    </p>
                                                    <p class="profile-founder"><?php echo $my_contact->contact_phone_number; ?>
                                                    </p>
                                                </div>
                                                <?php endforeach; ?>
      
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="user-profile-social-list">
                                        <h5>Additional Emails</h5>
                                            <table class="table small m-b-xs">

                                                <tbody>
                                                <?php if(is_array($emails)): ?>
                                             <?php foreach ($emails as $emails): ?> 
                                                    <tr>
                                                        <td>
                                                    <?php echo $emails->email_address; ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo site_url('Welcome/Delete_Email') ?>/<?php echo $emails->email_id; ?>" class="btn btn-danger twitter" data-toggle="tooltip" data-placement="top" title="Delete Email"><i class="fa fa-trash"></i></a>
                                                        </td>

                                                    </tr>
                                                                             <?php endforeach; ?>
      <?php else: ?>
        <tr>
          <td>No Additional Emails</td>
        </tr>
        <?php endif; ?>
                                                </tbody>
                                            </table>
                                             <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                            <form  id="email_form" action="<?php echo site_url('Welcome/Add_Email') ?>" method="post">
                                            <input type="text" name="id" value="<?php echo $my_contact->contact_id; ?>" hidden>
                                                <input type="email" name="email" placeholder="enter email" class="form-control">
                                                <a href="#" onclick="document.getElementById('email_form').submit();"><i class="fa fa-plus"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="user-profile-social-list">
                                        <h5>Additional Phone Numbers</h5>
                                            <table class="table small m-b-xs">

                                                <tbody>
                                                <?php if(is_array($phone_numbers)): ?>
                                             <?php foreach ($phone_numbers as $phone_numbers): ?> 
                                                    <tr>
                                                        <td>
                                                    <?php echo $phone_numbers->phone_number; ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo site_url('Welcome/Delete_Phone') ?>/<?php echo $phone_numbers->phone_id; ?>" class="btn btn-danger twitter" data-toggle="tooltip" data-placement="top" title="Delete Email"><i class="fa fa-trash"></i></a>
                                                        </td>

                                                    </tr>
                                                                             <?php endforeach; ?>
      <?php else: ?>
        <tr>
          <td>No Additional Phone Numbers</td>
        </tr>
        <?php endif; ?>
                                                </tbody>
                                            </table>
                                             <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                            <form  id="form1" action="<?php echo site_url('Welcome/Add_Phone_Number') ?>" method="post">
                                            <input type="text" name="id" value="<?php echo $my_contact->contact_id; ?>" hidden>
                                                <input type="text" name="phone" placeholder="enter phone_number" class="form-control">
                                                <a href="#" onclick="document.getElementById('form1').submit();"><i class="fa fa-plus"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php else: ?>
        <tr>
          <td>No Contact to Display</td>
        </tr>
      <?php endif; ?>
            </div>