<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo ADMINAPPTITLE; ?>::<?php echo $pagetitle; ?></title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('/assets/admin'); ?>/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('/assets/admin'); ?>/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('/assets/admin'); ?>/css/minified/core.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('/assets/admin'); ?>/css/minified/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('/assets/admin'); ?>/css/minified/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?php echo base_url('/assets/admin'); ?>/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/admin'); ?>/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/admin'); ?>/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/admin'); ?>/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo base_url('/assets/admin'); ?>/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/admin'); ?>/js/plugins/forms/selects/select2.min.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url('/assets/admin'); ?>/js/core/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/admin'); ?>/js/pages/datatables_advanced.js"></script>
	<!-- /theme JS files -->
    
    
    <script type="text/javascript">
// Basic initialization
$('.datatable-basic').DataTable({
	autoWidth: false,
	dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
    language: {
        search: '<span>Filter:</span> _INPUT_',
        lengthMenu: '<span>Show:</span> _MENU_',
        paginate: { 'first': 'First', 'last': 'Last', 'next': '→', 'previous': '←' }
    },
    drawCallback: function () {
        $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
    },
    preDrawCallback: function() {
        $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
    }
});
</script>




    
    
	<!-- /theme JS files -->

   <script type="text/javascript"> var base_url = "<?php echo base_url(); ?>"; </script>

</head>