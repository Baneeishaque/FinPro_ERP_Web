<!-- BREAD CRUMB GSTR-1 -->
<ul id="breadcrumbs">
    <li><a href="<?php echo base_url('general/gstclient');?>">GST CLIENTS</a></li>
    <li ><a href="<?php echo base_url('general/gstmonthlyfill'); ?>">GST MONTHLY FILLING</a></li> 
    <li><a href="<?php echo base_url('general/gmfresult');?>">company-name</a></li> 
    <li><a href="">VOUCHER</a></li>
</ul>

<div class="container">
    <div class="row ml-auto" id="fin-year" >
        <div class="ltext"><p>FINANCIAL YEAR</p></div><div class="rdigit"><p>2018-19</p></div>
    </div>
</div>

<!-- VOUCHER -->
<div class="container">


	<div class="row main-row">
        <div class="row voucher-row">
            <a href="<?php echo  base_url('general/payment');   ?>"><div class="child-box ">PAYMENT</div></a>
            <a href="<?php echo  base_url('general/receipt'); ?>"><div class="child-box ">RECEIPT </div></a>
            <a href="<?php echo  base_url('general/contra');     ?>"><div class="child-box">CONTRA</div></a>
            <a href="<?php echo  base_url('general/journal');   ?>"><div class="child-box ">JOURNAL</div></a>
           
        </div>
        <div class="row voucher-row">
            <a href="<?php echo  base_url('general/sales');   ?>"><div class="child-box ">SALE</div></a>
            <a href="<?php echo  base_url('general/'); ?>"><div class="child-box ">PURCHASE </div></a>
            <a href="<?php echo  base_url('general/');     ?>"><div class="child-box">SALE RETURN</div></a>
            <a href="<?php echo  base_url('general/');   ?>"><div class="child-box ">PURCHASE RETURN</div></a>
           
        </div>
    </div>
</div>
