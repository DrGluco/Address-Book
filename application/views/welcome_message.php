<!-- Static Table Start -->
            <div class="data-table-area mg-b-8 content-inner-all">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Address <span class="table-project-n">Book</span></h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div id="toolbar">
                                            <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                        </div>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    
                                                    <th data-field="id"></th>
                                                    <!-- <th data-field="name" data-editable="true">Project</th>
                                                    <th data-field="email" data-editable="true">Email</th>
                                                    <th data-field="phone" data-editable="true">Phone</th>
                                                    
                                                    <th data-field="action">Action</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                             <?php if(is_array($my_contact)): ?>
                                             <?php foreach ($my_contact as $my_contact): ?> 
                                                <tr>
                                                    
                                                    <td> <div class="user-profile-area">
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
                                                <div class="user-profile-content">
                                                    <h2><?php echo $my_contact->contact_name; ?> <?php echo $my_contact->contact_lname; ?></h2>
                                                    <p class="profile-founder"><?php echo $my_contact->contact_email; ?>
                                                    </p>
                                                    <p class="profile-founder"><?php echo $my_contact->contact_phone_number; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3">
                                        <div class="analytics-sparkle-line user-profile-sparkline">
                                            <div class="analytics-content">
                                                <a href="<?php echo site_url('Welcome/View_Contact') ?>/<?php echo $my_contact->contact_id; ?>" class="btn btn-success twitter" data-toggle="tooltip" data-placement="top" title="View Contact"><i class="fa fa-eye"></i></a>
                                                <a href="<?php echo site_url('Welcome/Edit_Contact') ?>/<?php echo $my_contact->contact_id; ?>" class="btn btn-primary twitter" data-toggle="tooltip" data-placement="top" title="Edit Contact"><i class="fa fa-pencil"></i></a>
                                                <a href="<?php echo site_url('Welcome/Delete_Contact') ?>/<?php echo $my_contact->contact_id; ?>" class="btn btn-danger twitter" data-toggle="tooltip" data-placement="top" title="Delete Contact"><i class="fa fa-trash"></i></a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div></td>
                                                   
                                                </tr>
                                                  <?php endforeach; ?>
      <?php else: ?>
        <tr>
          <td>No Contact to Display</td>
        </tr>
      <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Table End -->
        </div>
    </div>