# pg-google-analytics

This plugin has two important tools. It has a filter to change the Google Analytics id to whatever the clients ID is. Also it has an action hook to add custom google analytics before data is sent.

To alter Google Analytics id add the following code to your theme.

```
function alter_analytic_id( $id ){
	$id = 'new code here';
	return $id;
}
add_filter( 'pg_google_analytics_id', 'alter_analytic_id' );
```

To add custom code add the following code in your theme.

```
function custom_analytics(){
	// add custom google analytics code here.
}
add_action( 'pg_custom_analytics', 'custom_analytics' );
```
