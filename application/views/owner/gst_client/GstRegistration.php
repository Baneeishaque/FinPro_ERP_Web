<!-- BREAD CRUMB owner GST REGISTRATION-->
<ul id="breadcrumbs-owner" >
        <li><a class="breadcrumbs" href="<?php echo base_url('owner/gst_client') ?>">GST CLIENTS</a></li> 
        <li><a class="breadcrumbs" href="">GST NEW REGISTRATION</a></li>       
</ul>

<!-- CREATE SALE FORM -->
<div class="container col-md-12">
    <div class="whitebox   col-md-12">
 
        <form action="" method="post" class=""style="padding-top:2.5cm;">
            <div class="row  col-md-12 justify-content-center">
                <!-- left side input of form -->
                <div class=" col-md-6 col-sm-12">
                            <!--- ----------------DATE------------------------------- -->
                        <div class="row">
                            <div class="form-group ">
                            
                                    <label class="formlabels" for="date">DATE</label>
                                    <input type="date" name="paymentdate" class="ledgerinput" placeholder="" style="text-align: center;">
        
                            </div>
                        </div>
                                <!-- ------------CLIENT---------------------------------- -->
                        <div class="row">
                            <div class="form-group">
                                <label class="formlabels" for="invno">CLIENT</label>
                                <input type="text" class="ledgerinput" name="client">
                                
                            </div>    
                        </div>
                                <!-- -----MOBILE ----------------------------------------- -->
                        <div class="row">
                            <div class="form-group">
                                <label class="formlabels" for="category">MOBILE</label>     
                                <input type="tel" class="ledgerinput" name="mobile">
                                
                            </div>    
                        </div>
                                <!-------------DOCUMENT STATUS--------------------------------------------- -->
                        <div class="row">
                            <label class="formlabels" for="docstatus">DOCUMENT STATUS</label>
                            <div class="form-group row">
                                
                                 <!-- check boxes start -->
                                <div class="form-group ">
                                   
                                    <div class="container col-md-12">
                                        <div class="col-md-6">
                                            <input type="checkbox" class="check-boxes" name="inventory"><label for="inventory" class="ledg-label">Test Data</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" class="check-boxes" name="inventory"><label for="inventory" class="ledg-label">Test Data</label>
                                        </div>
                                    </div>


                                    <div class="container col-md-12">
                                        <div class="col-md-6">
                                            <input type="checkbox" class="check-boxes" name="inventory"><label for="inventory" class="ledg-label">Test Data</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" class="check-boxes" name="inventory"><label for="inventory" class="ledg-label">Test Data</label>
                                        </div>
                                        
                                    </div>

                                    <div class="container col-md-12">
                                        <div class="col-md-6">
                                            <input type="checkbox" class="check-boxes" name="inventory"><label for="inventory" class="ledg-label">Test Data</label>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- check box end -->
    
                            </div>  

                        </div>
                        <!-- -----EMAIL ----------------------------------------- -->
                        <div class="row">
                            <div class="form-group">
                                <label class="formlabels" for="category">EMAIL ID</label>     
                                <input type="text" class="ledgerinput" name="email">
                                
                            </div>    
                        </div>

                        <!-- -----PWU ----------------------------------------- -->
                        <div class="row">
                            <div class="form-group">
                                <label class="formlabels" for="category">PW</label>     
                                <input type="text" class="ledgerinput" name="pw">
                                
                            </div>    
                        </div>

                        <!-- -----TRN ----------------------------------------- -->
                        <div class="row">
                            <div class="form-group">
                                <label class="formlabels" for="category">TRN</label>     
                                <input type="text" class="ledgerinput" name="trn">
                                
                            </div>    
                        </div>

                        <!-- -----ARN ----------------------------------------- -->
                        <div class="row">
                            <div class="form-group">
                                <label class="formlabels" for="category">ARN</label>     
                                <input type="text" class="ledgerinput" name="arn">
                                
                            </div>    
                        </div>

                </div>

                <!-- right side inputs of form -->
                <div class="col-md-6 col-sm-12">
                                    <!-- ---------GSTIN-------------------------------- -->
                                <div class="row">
                                    <div class="form-group ">
                                    
                                            <label class="formlabels" for="taxbl">GSTIN</label>
                                            <input type="text" name=" gstin" class="ledgerinput">
                                    </div>
                                </div>
                                    <!-- ------------- GST USERNAME---------------------------------- -->

                                <div class="row">
                                    <div class="form-group">
                                        <label class="formlabels" for="sgst">GST USERNAME</label>
                                        <input type="text" name="gstusername" class="ledgerinput">
                                        
                                    </div>    
                                </div>
                                    <!-- ---------PW--------------------------------------- -->
                                <div class="row">
                                    <div class="form-group">
                                        <label class="formlabels" for="discount">PW</label>
                                        <input type="text" name="pw" class="ledgerinput">
                                        
                                    </div>    
                                </div>
                                    <!-- -----------OPENING BALANCE------------------------------- -->
                                <div class="row">
                                    <div class="form-group">
                                        <label class="formlabels" for="total">OPENING BALANCE</label>
                                        <input type="text" name="opbalance" class="ledgerinput">
                                        
                                    </div>    
                                </div>
                                     <!-- ---------BUDGET--------------------------------------- -->
                                     <div class="row">
                                    <div class="form-group">
                                        <label class="formlabels" for="discount">BUDGET</label>
                                        <input type="text" name="budget" class="ledgerinput">
                                        
                                    </div>    
                                </div>
                                     <!-- ---------CHARGE OUT--------------------------------------- -->
                                     <div class="row">
                                    <div class="form-group">
                                        <label class="formlabels" for="discount">CHARGE OUT</label>
                                        <input type="text" name="chargeout" class="ledgerinput">
                                        
                                    </div>    
                                </div>
                                     <!-- ---------TOTAL--------------------------------------- -->
                                     <div class="row">
                                    <div class="form-group">
                                        <label class="formlabels" for="discount">TOTAL</label>
                                        <input type="text" name="total" class="ledgerinput">
                                        
                                    </div>    
                                </div>
                                <!-- ---------RECIEVED--------------------------------------- -->
                                <div class="row">
                                    <div class="form-group">
                                        <label class="formlabels" for="discount">RECIEVED</label>
                                        <input type="text" name="recieved" class="ledgerinput">
                                        
                                    </div>    
                                </div>
                                 <!-- ---------RCLOSING BALANCE--------------------------------------- -->
                                 <div class="row">
                                    <div class="form-group">
                                        <label class="formlabels" for="discount">CLOSING BALANCE</label>
                                        <input type="text" name="closingbalance" class="ledgerinput">
                                        
                                    </div>    
                                </div>
                            
                               
                </div>  
                <div class="row payment-btn col-md-6 form-group ">
                                    <button type="button" class="btn owner-style" id="buttons">EXPORT<span style="font-size: 20px">&#8617;</span></button>
                                    <button type="button" class="btn owner-style" id="buttons">PRINT<span style="font-size: 20px">&#8617;</span></button>
                                    <button type="button" class="btn owner-style" id="buttons">DISCARD<span style="font-size: 20px">&#8617;</span></button>
                                    <button type="submit" class="btn owner-style" id="buttons">SAVE<span style="font-size: 20px">&#8617;</span></button>
                                </div>
            </div>        
        
        </form>
        
    </div>
</div>