<!DOCTYPE html>
<html>
<head>
<title>FileULoad</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
<style>
.progress { position:relative; width:100%; }
.bar { background-color: #b5076f; width:0%; height:20px; }
.percent { position:absolute; display:inline-block; left:50%; color: #040608;}
</style>
</head>
<body>
<div class="container mt-5">
<div class="card">
<div class="card-header text-center">
<h2>Upload Your CSV File with Progess Bar</h2>
</div>
<div class="card-body">
<form method="POST" action="<?php echo e(url('ajax-file-upload-progress-bar')); ?>" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<div class="form-group">
<input name="file" type="file" class="form-control"><br/>
<div class="progress">
<div class="bar"></div >
<div class="percent">0%</div >
</div>
<br>
<input type="submit"  value="Submit" class="btn btn-primary">
</div>
</form>
</div>
</div>
</div>
<script type="text/javascript">
var SITEURL = "<?php echo e(URL('/')); ?>";
$(function() {
$(document).ready(function()
{
var bar = $('.bar');
var percent = $('.percent');
$('form').ajaxForm({
beforeSend: function() {
var percentVal = '0%';
bar.width(percentVal)
percent.html(percentVal);
},
uploadProgress: function(event, position, total, percentComplete) {
var percentVal = percentComplete + '%';
bar.width(percentVal)
percent.html(percentVal);
},
complete: function(xhr) {
alert('File Has Been Uploaded Successfully');
window.location.href = SITEURL +"/"+"ajax-file-upload-progress-bar";
}
});
}); 
});
</script>
</body>
</html><?php /**PATH C:\wampp\www\FileUload\resources\views/progress-bar-file-upload.blade.php ENDPATH**/ ?>