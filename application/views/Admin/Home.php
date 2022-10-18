<?php $this->load->view('templates/Admin/Header');?>
 <div id="page-wrapper" >
    <div id="page-inner">
      <div class="row">
        <div class="col-lg-12">
           <center><h2>SELAMAT DATANG DI HALAMAN ADMIN </h2></center>   
       </div>
   </div>              
   <!-- /. ROW  -->
   <hr />
   <div class="row">
      <div class="col-lg-12 ">
        <div class="alert alert-info">
           <center><strong><H2>Welcome <?php echo $this->session->userdata('username'); ?> ! </H2> </strong> </center>
       </div>

   </div>
</div>

<!-- /. ROW  --> 
</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->     
<?php $this->load->view('templates/Admin/Footer'); ?>