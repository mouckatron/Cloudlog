
<div class="container">

	<h1>ADIF Functions</h1>

	<div class="card">
	  <div class="card-header">
	    <?php echo $page_title; ?>
	  </div>
	  <div class="card-body">
	    <h5 class="card-title"></h5>
	    <p class="card-text"></p>

	    <p><span class="label important">Important</span> Log files must have the file type .adi</p>

		<form class="form-inline" action="<?php echo site_url('adif/import'); ?>" method="post" enctype="multipart/form-data">
		  <label class="sr-only" for="inlineFormInputName2">ADIF file</label>
		  <input class="file-input mb-2 mr-sm-2" type="file" name="userfile" size="20" />

		  <button type="submit" class="btn btn-primary mb-2" value="Upload">Upload</button>
		</form>
	  </div>
	</div>

<br>

<div class="card">
  <div class="card-header">
    ADIF Export
  </div>
  <div class="card-body">
    <h5 class="card-title">Take your logbook file anywhere!</h5>
    <p class="card-text">Exporting ADIFs allows you to import contacts into third party applications like LoTW, Awards or just for keeping a backup.</p>
    <a href="<?php echo site_url('adif/exportall'); ?>" title="Export All" target="_blank" class="btn btn-outline-secondary btn-sm">Export All QSOs</a>
  </div>
</div>

</div>

