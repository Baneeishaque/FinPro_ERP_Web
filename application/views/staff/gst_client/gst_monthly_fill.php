
    <ul id="breadcrumbs">
        <li><a href="<?php echo base_url('general/gstclient');?>">GST CLIENTS</a></li>
        <li class="current"><a>GST MONTHLY FILLING</a></li>  
    </ul>

<div class="conatainer">
    <div class="form-box col-md-11 col-sm-12">
        <form action="<?php echo base_url('general/gmfresult') ?>" method="post" class="main-form">
            <div class="row">
                <div class="form-group for-year">
                   
                        <label class="gmflabels" for="financialyear">FINANCIAL YEAR </label>
                    
                        <?php $years = range(2000, strftime("%Y", time())); ?>
                        
                        <div class="custom-select" id="custom-select">
                            <select name="year" id="yearselect" style="border:none;width:2.2cm">
                                
                                <?php foreach($years as $year) : ?>
                                    <option value="<?php echo $year; ?>'-'<?php echo $year+1; ?>"><?php echo $year; ?>-<?php echo $year+1; ?></option>
                                <?php endforeach; ?>
                            </select><i class="fa fa-calendar" style="" aria-hidden="true"></i>
                        </div>
                        
                    
                </div>
            </div>
            <div class="row">
                <div class="form-group for-company">
                    <label class="gmflabels" for="company">COMPANY</label>
                    <select name="company" id="company">
                            <option value="">dotLocus Pvt. Ltd.</option>
                            <option value="">example company.etc</option>
                    </select> 
                </div>    
            </div>
            <div class="row">
                <button type="submit" class="btn button-row" id="buttons" href="#"><span>SUBMIT</span><i class="fa fa-upload" style="padding-left:10px;"></i></button>
            </div>
            
        </form>

    </div>
</div>