<!-- BREAD CRUMB SALES create -->
<ul id="breadcrumbs">
    <li><a href="<?php echo base_url('general/gstclient');?>">GST CLIENTS</a></li>
    <li ><a href="<?php echo base_url('general/gstmonthlyfill'); ?>">GST MONTHLY FILLING</a></li> 
    <li><a href="<?php echo base_url('general/gmfresult');?>">company-name</a></li> 
    <li><a href="<?php echo base_url('general/voucher');?>">VOUCHER</a></li>
    <li><a href="<?php echo base_url('general/sales');?>">SALES</a></li>
    <li><a href="">CREATE</a></li>
</ul>


<!-- CREATE SALE FORM -->
<div class="container col-md-12">
    <div class="whitebox   col-md-12">
 
        <form action="" method="post" class="    "style="padding-top:2.5cm;">
            <div class="row  col-md-12 justify-content-center">
                <div class=" col-md-6 col-sm-12">
                                <!-- --------------DATE------------------------------- -->
                        <div class="row">
                            <div class="form-group ">
                            
                                    <label class="formlabels" for="date">DATE</label>
                                    <input type="date" name="paymentdate" class="ledgerinput" placeholder="" style="text-align: center;">
        
                            </div>
                        </div>
                                <!-- ------------METHOD---------------------------------- -->
                        <div class="row">
                            <div class="form-group">
                                <label class="formlabels" for="method">METHOD</label>
                                <select name="mathod" class="ledgerinput" id="category">
                                        <option  value="">cash/bank</option>
                                        <option value="">upi</option>
                                </select>
                                
                            </div>    
                        </div>
                                <!-- -----CATEGORY----------------------------------------- -->
                        <div class="row">
                            <div class="form-group">
                                <label class="formlabels" for="category">CATEGORY</label>
                                <select name="category" class="ledgerinput" id="category">
                                        <option  value="">GST Sales 18%</option>
                                        <option value=""></option>
                                </select>
                                
                            </div>    
                        </div>
                                <!-------------INV NO.--------------------------------------------- -->
                        <div class="row">
                            <div class="form-group">
                                <label class="formlabels" for="invno">INV NO.</label>
                                <input type="text" class="ledgerinput" name="inv">
                                
                            </div>    
                        </div>
                </div>


                <div class="col-md-6 col-sm-12">
                                    <!-- ---------TAXABL-------------------------------- -->
                                <div class="row">
                                    <div class="form-group ">
                                    
                                            <label class="formlabels" for="taxbl">TAXABL</label>
                                            <input type="text" name="taxbl" class="ledgerinput" placeholder="0.00" style="text-align: center;">
                                    </div>
                                </div>

                                    <!-- -----------CGST----------------------------------- -->
                                <div class="row">
                                    <div class="form-group">
                                        <label class="formlabels" for="cgst">CGST</label>
                                        <input type="text" name="cgst" class="ledgerinput" placeholder="0.00" style="text-align: center;">
                                        
                                    </div>    
                                </div>
                                    <!-- -------------SGST---------------------------------- -->

                                <div class="row">
                                    <div class="form-group">
                                        <label class="formlabels" for="sgst">SGST</label>
                                        <input type="text" name="sgst" class="ledgerinput" placeholder="0.00" style="text-align: center;">
                                        
                                    </div>    
                                </div>
                                    <!-- ---------DISCOUNT--------------------------------------- -->
                                <div class="row">
                                    <div class="form-group">
                                        <label class="formlabels" for="discount">DISCOUNT</label>
                                        <input type="text" name="discount" class="ledgerinput" placeholder="0.00" style="text-align: center;">
                                        
                                    </div>    
                                </div>
                                    <!-- -----------TOTAL------------------------------- -->
                                <div class="row">
                                    <div class="form-group">
                                        <label class="formlabels" for="total">TOTAL</label>
                                        <input type="text" name="total" class="ledgerinput" placeholder="0.00" style="text-align: center;">
                                        
                                    </div>    
                                </div>
                            
                               
                </div>  
                <div class="row payment-btn col-md-6 form-group ">
                                    <button type="button" class="btn " id="buttons">EXPORT<span style="font-size: 20px">&#8617;</span></button>
                                    <button type="button" class="btn  " id="buttons">PRINT<span style="font-size: 20px">&#8617;</span></button>
                                    <button type="button" class="btn " id="buttons">DISCARD<span style="font-size: 20px">&#8617;</span></button>
                                    <button type="submit" class="btn " id="buttons">SAVE<span style="font-size: 20px">&#8617;</span></button>
                                </div>
            </div>        
        
        </form>
        
    </div>
</div>