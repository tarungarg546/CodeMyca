<!DOCTYPE HTML>
<HTML>
<head>
	<title>
		1
	</title>
	<style type="text/css">
	form
	{
		height: 100px;
		width: 100%;
		visibility: visible;
	}
	textarea
	{
		height: 100px;
		width: 100%;
		visibility: visible;
	}
	</style>
</head>
<body>
	<form method="post" action="/codemyca/add.php">
		<textarea name="content" style="width:100%; height:300px;" ></textarea>		
<button>SUBMIT</button>	</form>
</body>
	<script type="text/javascript" src="/codemyca/tinymce/js/tinymce/tinymce.min.js"></script>
	<script type="text/javascript">
	tinymce.init({
    selector: "textarea",
    theme: "modern",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
});

</script>
</HTML>