<!-- BREAD CRUMB  LEDGER=CREATE -->
<ul id="breadcrumbs">
    <li><a href="<?php echo base_url('general/gstclient');?>">GST CLIENTS</a></li>
    <li ><a href="<?php echo base_url('general/gstmonthlyfill'); ?>">GST MONTHLY FILLING</a></li> 
    <li><a href="<?php echo base_url('general/gmfresult');?>">company-name</a></li> 
    <li><a href="<?php echo base_url('general/accountinfo');?>">ACCOUNT INFO</a></li>
    <li><a href="<?php echo base_url('general/ledger');?>">LEDGER</a></li>
    <li><a href="">CREATE</a></li>

</ul>

    <div class="container col-md-12">
        <div class="ledger-create col-md-12 col-sm-12">
            <form action="" method="post" class="ledger-form">
                <div class="row">
                    <div class="form-group ">
                    
                            <label class="formlabels" for="ledgername">NAME</label>
                            <input type="text" name="legername" class="ledgerinput" placeholder="Ledger Name" style="text-align: center;">
  
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="formlabels" for="company">CATEGORY</label>
                        <select name="category" class="ledgerinput" id="category">
                                <option  value="">category 1</option>
                                <option value="">cat2</option>
                        </select>
                        
                    </div>    
                </div>
                <!--------------------------------- CHECK BOXES START ------------------>
                <div class="row">
                    <div class="col-md-4 col-sm-4"></div>
                    <div class="form-group col-md-4 col-sm-4"> 
                        <!-- CAPITAL ACCOUNT-->
                        <input type="checkbox" class="check-boxes" name="capitalac"><label for="capitalaccount" class="ledg-label">Capital Account</label>
                    </div>
                    <div class="form-group "> 
                        <!-- CASH -->
                        <input type="checkbox" class="check-boxes" name="cash"><label for="cash" class="ledg-label">Cash</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-4"></div>
                    <div class="form-group col-md-4 col-sm-4"> 
                        <!-- ACCOUNT RECEIVABLE -->
                        <input type="checkbox" class="check-boxes" name="acreceivable"><label for="acreceivable" class="ledg-label">Account Receivable</label>
                    </div>
                    <div class="form-group "> 
                        <!-- INVENTORY -->
                        <input type="checkbox" class="check-boxes" name="inventory"><label for="inventory" class="ledg-label">Inventory</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-4"></div>
                    <div class="form-group col-md-4 col-sm-4"> 
                        <!-- ACCOUNT RECEIVABLE -->
                        <input type="checkbox" class="check-boxes" name="otherassets"><label for="otherassets" class="ledg-label">Other Assets</label>
                    </div>
                </div>
                <!--------------------- CHECK BOXES END---------------------------->
                <!------------------- SELECTORS(RADIO) START---------------------------->
                <div class="row">
                    <div class="form-group">
                    
                            <label class="formlabels" for="selector">SELECTOR</label>
                            
                            <div class="choosing"><input type="radio" name="selector1" ><label class="ledg-label" for="selector1">Selector 1</label></div>
                            
                            <div class="choosing"><input type="radio" name="selector1" ><label class="ledg-label" for="selector2">Selector 2</label></div>
  
                    </div>  
                </div>
                <!------------------- SELECTORS(RADIO) END---------------------------->
                 <!------------------- OPTIONS(CHECHBOX) START---------------------------->
                <div class="row">
                    <div class="form-group">
                    
                            <label class="formlabels" for="options">OPTIONS</label>
                            
                            <div class="choosing"><input type="checkbox" name="option1" class=""><label class="ledg-label" for="option1">Option 1</label></div>
                            
                            <div class="choosing"><input type="checkbox" name="option2" ><label class="ledg-label" for="option21">Option 2</label></div>

                    </div>  
                </div>
                 <!------------------- OPTIONS(CHECKBOX) END---------------------------->

                <div class="row ledger-submit">
                    <button type="submit" class="btn button-row" id="buttons">SUBMIT<span style="font-size: 20px">&#8617;</span></button>
                </div>
                
            </form>
        </div>
    </div>