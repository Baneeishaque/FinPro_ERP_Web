<!-- BREAD CRUMBCONTRA CREATE -->
<ul id="breadcrumbs">
    <li><a href="<?php echo base_url('general/gstclient');?>">GST CLIENTS</a></li>
    <li ><a href="<?php echo base_url('general/gstmonthlyfill'); ?>">GST MONTHLY FILLING</a></li> 
    <li><a href="<?php echo base_url('general/gmfresult');?>">company-name</a></li> 
    <li><a href="<?php echo base_url('general/voucher');?>">VOUCHER</a></li>
    <li><a href="<?php echo base_url('general/contra');?>">CONTRA</a></li>
    <li><a href="">CREATE</a></li>
</ul>

<div class="container col-md-11">
        <div class="ledger-create col-md-12 col-sm-12">
            <form action="" method="post" class="ledger-form "style="padding-top:2.5cm;">
                <div class="row">
                    <div class="form-group ">
                    
                            <label class="formlabels" for="date">DATE</label>
                            <input type="date" name="paymentdate" class="ledgerinput" placeholder="" style="text-align: center;">
  
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="formlabels" for="method">D / R</label>
                        <select name="dr" class="ledgerinput" id="category">
                                <option  value="">cash/bank</option>
                                <option value="">upi</option>
                        </select>
                        
                    </div>    
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="formlabels" for="category">C / R</label>
                        <select name="cr" class="ledgerinput" id="category">
                                <option  value="">power and fuel</option>
                                <option value=""></option>
                        </select>
                        
                    </div>    
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="formlabels" for="AMOUNT">AMOUNT</label>
                        <input type="text" class="ledgerinput" name="amount">
                        
                    </div>    
                </div>
               
                <div class="row payment-btn form-group justify-content-end">
                    <button type="submit" class="btn " id="buttons">SUBMIT<span style="font-size: 20px">&#8617;</span></button>
                </div>
                
            </form>
        </div>
    </div>