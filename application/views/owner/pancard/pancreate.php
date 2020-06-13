<!-- BREAD CRUMB owner pancard create-->
<ul id="breadcrumbs-owner" >
        <li><a href="<?php echo base_url('owner/pancard'); ?>">PAN CARD</a></li>
        <li><a >CREATE</a></li>            
</ul>

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
                                <label class="formlabels" for="client">CLIENT</label>
                                <input type="text" class="ledgerinput" name="client">
                                
                            </div>    
                        </div>
                                <!-- -----MOBILE ----------------------------------------- -->
                        <div class="row">
                            <div class="form-group">
                                <label class="formlabels" for="mob">MOB</label>     
                                <input type="tel" class="ledgerinput" name="mob">
                                
                            </div>    
                        </div>
                        <!-- -----WORK----------------------------------------- -->
                        <div class="row">
                            <div class="form-group">
                                <label class="formlabels" for="work">WORK</label>     
                                <input type="text" class="ledgerinput" name="work">
                                
                            </div>    
                        </div>
                        <!-- -----FEE ----------------------------------------- -->
                        <div class="row">
                            <div class="form-group">
                                <label class="formlabels" for="fee">FEE</label>     
                                <input type="text" class="ledgerinput" name="fee">
                                
                            </div>    
                        </div>

                        <!-- -----OPENING BALANCE ----------------------------------------- -->
                        <div class="row">
                            <div class="form-group">
                                <label class="formlabels" for="openingbalance">OPENING BALANCE</label>     
                                <input type="text" class="ledgerinput" name="openingbalance">
                                
                            </div>    
                        </div>

                      

                </div>

                <!-- right side inputs of form -->
                <div class="col-md-6 col-sm-12">
                                    <!-- ---------BUDGET-------------------------------- -->
                                <div class="row">
                                    <div class="form-group ">
                                    
                                            <label class="formlabels" for="buget">BUDGET</label>
                                            <input type="text" name="buget" class="ledgerinput">
                                    </div>
                                </div>
                                    <!-- -------------CHARGE OUT---------------------------------- -->

                                <div class="row">
                                    <div class="form-group">
                                        <label class="formlabels" for="chargeout">CHARGE OUT</label>
                                        <input type="text" name="chargeout" class="ledgerinput">
                                        
                                    </div>    
                                </div>
                                    <!-- ---------TOTAL--------------------------------------- -->
                                <div class="row">
                                    <div class="form-group">
                                        <label class="formlabels" for="total">TOTAL</label>
                                        <input type="text" name="total" class="ledgerinput">
                                        
                                    </div>    
                                </div>
                                    <!-- -----------RECIEVED------------------------------- -->
                                <div class="row">
                                    <div class="form-group">
                                        <label class="formlabels" for="recieved">RECIEVED</label>
                                        <input type="text" name="recieved" class="ledgerinput">
                                        
                                    </div>    
                                </div>
                                     <!-- ---------CLOSING BALANCE--------------------------------------- -->
                                 <div class="row">
                                    <div class="form-group">
                                        <label class="formlabels" for="closingbalance">CLOSING BALANCE</label>
                                        <input type="text" name="closingbalance" class="ledgerinput">
                                        
                                    </div>    
                                </div>
                                        <!-- ---------ASSIGNED--------------------------------------- -->
                                 <div class="row">
                                        <div class="form-group">
                                            <label class="formlabels" for="assigned">ASSIGNED</label>
                                            <input type="text" name="assigned" class="ledgerinput">
                                            
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