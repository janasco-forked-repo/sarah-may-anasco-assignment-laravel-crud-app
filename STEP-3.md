next is to type the following command in cmd:


composer require yajra/laravel-datatables-oracle




next command is to add datatable service provider in providers and alias inside the config/app.php file:

.....
.....
'providers' => [
	....
	....
	Yajra\DataTables\DataTablesServiceProvider::class,
]
'aliases' => [
	....
	....
	'DataTables' => Yajra\DataTables\Facades\DataTables::class,
]
.....
.....