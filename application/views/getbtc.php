<?php $this->load->view('include/header');
      $this->load->view('include/left_side_menu');
      $this->load->view('include/top_menu');?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <?php //$this->load->view('include/other_menu')?>  
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Deposit BTC</h2>
                      <div class="pull-right btn btn-success col-md-3" >1 VCN = <span id="rate1" style="color:#fff !important;"></span> BTC</div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                        <br />
                        <?php if($this->session->flashdata('success')){ ?>
                          <div class="alert alert-block alert-success">
                              <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
                              <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
                          </div>
                      <?php }else if($this->session->flashdata('error')){  ?>
                          <div class="alert alert-block alert-danger">
                              <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
                              <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                          </div>
                      <?php } ?>
                        <form action="<?php echo base_url()?>getvcn/transaction" method="POST" id="sendform" class="form-horizontal form-label-left text-center">
                          <img src="http://chart.apis.google.com/chart?cht=qr&chs=300x300&chl=1HSpKB2Xm4kuiurSeDiiqgqH5Q4p539M4c" class="img-responsive" style="width: 15%;margin-left: 42%;">
				<br><span>1HSpKB2Xm4kuiurSeDiiqgqH5Q4p539M4c</span><br><br>
				
                         
                         

                        </form>
                  </div>
                </div>
              </div>
            </div>

          
          </div>
</div>
        <!-- /page content -->
<?php $this->load->view('include/footer');  ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
  <script type="text/javascript">

      function resetfun()
       {
        window.location.reload();
       }



       $(document).ready(function() {
        currentvcnrate();
    setTimeout(function(){ $(".alert").hide(); }, 5000);
    
    $("#sendform").validate({
      rules: {
        
        btcaddress: {
        required: true
          
        },amount:{
          required: true
        }
      },
      messages: {
        subject: {
          required: "Please enter BTC address"
        },
        amount: {
          required: "Please enter amount",
         
        }
      }
    }); 
  });
  </script>

     
 <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/css/screen.css">

<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}

  label.error
  {
    text-shadow:none !important;
    color: #7d1c1c !important;
    font-style : normal !important;
  }
  </style>

  <script type="text/javascript">

          function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 46 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}


    function compareamt()
    {
      var BTCamount=$('#BTCamount').val();

       $.post('<?php echo base_url();?>getvcn/compareamt',{
      
          amount:BTCamount
          },
          function(data){
         
         $('#rate').html(data);
          }
        ); 


    }


    function currentvcnrate()
    {
       $.post('<?php echo base_url();?>getvcn/currentvcnrate',{
      
          
          },
          function(data){
          $('#rate1').html(data);
        
          }
        ); 
    }
$( document ).ready(function() {
 $('input').prop('value','')
});
 
  </script>

       
