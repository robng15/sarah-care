<link href='http://fonts.googleapis.com/css?family=Michroma' rel='stylesheet' type='text/css'>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="sarahcare-style.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Handlee' rel='stylesheet' type='text/css'>

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script language="javascript">
//image swapping function:
function hiLite(imgDocID, imgObjName, comment) {
if (browserVer == 1) {
document.images[imgDocID].src = eval(imgObjName + ".src");
window.status = comment; return true;
}}
//end hiding -->

</script> 
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<!-- include Cycle plugin -->
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.slideshow').cycle({
		fx:     'fade', 
    speed:   2000, 
    timeout: 700 
	});
});
</script>