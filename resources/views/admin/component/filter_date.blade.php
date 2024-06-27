<div class="col-xs-2">
  <label>From Date (Created At)</label>
  <input type="text" class="form-control datepicker" id="fdate" name="fdate" placeholder="Filter by from date" value="<?php echo isset($_GET['fdate']) ? $_GET['fdate'] : ''; ?>" autocomplete="off">
</div>

<div class="col-xs-2">
  <label>To Date (Created At)</label>
  <input type="text" class="form-control datepicker" id="tdate" name="tdate" placeholder="Filter by from date" value="<?php echo isset($_GET['tdate']) ? $_GET['tdate'] : ''; ?>" autocomplete="off">
</div>