<!-- breadcrumb -->
<ul id="breadcrumbs">
    <li><a href="<?php echo base_url('general/gstclient');?>">GST CLIENTS</a></li>
    <li ><a href="<?php echo base_url('general/gstmonthlyfill'); ?>">GST MONTHLY FILLING</a></li> 
    <li><a href="<?php echo base_url('general/gmfresult');?>"><?php echo 'company-name' ?></a></li>
    <li><a href="<?php echo base_url('general/documents') ?>">DOCUMENTS</a></li>
    <li><a>PURCHASE</a></li>  
</ul>

<div class="container">
    <div class="row ml-auto" id="" >
        <form method="post" enctype="multipart/form-data" action="">
            <button type="submit" class="btn button-row" id="buttons" href="#"><span>UPLOAD</span><i class="fa fa-upload" style="padding-left:10px;"></i></button>
        </form>         
    </div>
</div>

<div class="purchase-document">
    <div class="col-md-12">
    
        <div class="row" id="document-row">
            

            <a href="<?php echo  base_url('general/');   ?>"><div class="doc-box "><span>PURCHAS</span><div class="icon-box"><i class="fa fa-eye fa-3x"style="color:white;" aria-hidden="true"></i><i class="fa fa-trash-o fa-3x" style="color:white;" aria-hidden="true" ></i></div></div></a>
            <a href="<?php echo  base_url('general/');   ?>"><div class="doc-box ">BANK</div></a>
            <a href="<?php echo  base_url('general/');    ?>"><div class="doc-box">SALES</div></a>
            <a href="<?php echo  base_url('general/');    ?>"><div class="doc-box ">GST REPORT</div></a>
            <a href="<?php echo  base_url('general/');    ?>"><div class="doc-box">OTHERS</div></a>
      
            
 
        </div>
        
     
    </div>     	

</div>
  
