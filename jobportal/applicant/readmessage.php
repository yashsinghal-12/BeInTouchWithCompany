<?php 
  $id = isset($_GET['id']) ? $_GET['id'] :0;

$sql="UPDATE `tbljobregistration` SET HVIEW=1 WHERE `REGISTRATIONID`='{$id}'";
$mydb->setQuery($sql);
$mydb->executeQuery();


$sql = "SELECT * FROM `tblcompany` c,`tbljobregistration` jr,  `tbljob` j  WHERE c.`COMPANYID`=jr.`COMPANYID` AND jr.`JOBID`=j.`JOBID` AND `REGISTRATIONID`='{$id}'";
$mydb->setQuery($sql);
$res = $mydb->loadSingleResult();

$applicant = new Applicants();
$appl  = $applicant->single_applicant($_SESSION['APPLICANTID']);


?> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Main content -->
    <section class="content">
      <div class="row"> 
        <!-- /.col -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Read Message</h3> 
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h3><?php  echo $res->OCCUPATIONTITLE; ?></h3>
                <h5>From: <?php  echo $res->COMPANYNAME; ?>
                  <span class="mailbox-read-time pull-right"><?php  echo date_format(date_create($res->DATETIMEAPPROVED),'d M. Y h:i a'); ?></span></h5>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                    <i class="fa fa-trash-o"></i></button>
              
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                  <i class="fa fa-print"></i></button>
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <p>Hello <?php  echo $appl->FNAME; ?>,</p>  
                  <p><?php  echo $res->REMARKS; ?></p>


                <p>Thanks,<br><?php  echo $res->COMPANYNAME; ?></p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
          
            <div class="box-footer">
     
              <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
              <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  