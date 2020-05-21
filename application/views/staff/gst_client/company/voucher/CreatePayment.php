<!-- BREAD CRUMB PAYMENT CREATE -->
<ul id="breadcrumbs">
    <li><a href="<?php echo base_url('general/gstclient');?>">GST CLIENTS</a></li>
    <li ><a href="<?php echo base_url('general/gstmonthlyfill'); ?>">GST MONTHLY FILLING</a></li> 
    <li><a href="<?php echo base_url('general/gmfresult');?>">company-name</a></li> 
    <li><a href="<?php echo base_url('general/voucher');?>">VOUCHER</a></li>
    <li><a href="<?php echo base_url('general/payment');?>">PAYMENT</a></li>
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
                        <label class="formlabels" for="method">METHOD</label>
                        <select name="mathod" class="ledgerinput" id="category">
                                <option  value="">cash/bank</option>
                                <option value="">upi</option>
                        </select>
                        
                    </div>    
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="formlabels" for="category">CATEGORY</label>
                        <select name="category" class="ledgerinput" id="category">
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
               
                <div class="row payment-btn form-group ">
                    <button type="button" class="btn " id="buttons">EXPORT<span style="font-size: 20px">&#8617;</span></button>
                    <button type="button" class="btn  " id="buttons">PRINT<span style="font-size: 20px">&#8617;</span></button>
                    <button type="button" class="btn " id="buttons">DISCARD<span style="font-size: 20px">&#8617;</span></button>
                    <button type="submit" class="btn " id="buttons">SAVE<span style="font-size: 20px">&#8617;</span></button>
                </div>
                
            </form>
        </div>
    </div>