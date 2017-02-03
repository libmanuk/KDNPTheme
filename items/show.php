<html>
<head><title></title></head>
<body style="margin:0 !important; height:2200px;">

<script type="text/javascript">
var ex =document.referrer;
var url = ex.split('&');
var urlpart = url[0];
var search = urlpart.replace("https://kentuckynewspapers.org/kdnp/solr-search?q=", "");
location.href = "https://kentuckynewspapers.org/catalog/" + "<?php echo metadata('item', array('Dublin Core','Identifier')); ?>" + "?" + search;
</script>

</body>
</html>
