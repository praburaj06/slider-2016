class Googlemaps {
	
	var $adsense					= FALSE; 					// Whether Google Adsense For Content should be enabled
	var $adsenseChannelNumber		= ''; 						// The Adsense channel number for tracking the performance of this AdUnit
	var $adsenseFormat				= 'HALF_BANNER';			// The format of the AdUnit
	var $adsensePosition			= 'TOP_CENTER';				// The position of the AdUnit
	var $adsensePublisherID			= '';						// Your Google AdSense publisher ID
	var $apiKey						= ''; 						// If you've got an API key you can use it by passing this parameter. Setup an API key here: https://code.google.com/apis/console
	var $backgroundColor			= '';						// A hex color value shown as the map background when tiles have not yet loaded as the user pans
	var $bicyclingOverlay			= FALSE;					// If set to TRUE will overlay bicycling information (ie. bike paths and suggested routes) onto the map by default 
	var $center						= "37.4419, -122.1419";		// Sets the default center location (lat/long co-ordinate or address) of the map. If defaulting to the users location set to "auto"
	var $class 						= '';						// A class name if wishing to style the map further through CSS. Can also be useful if wanting it to be responsive etc.
	var $cluster					= FALSE;					// Whether to cluster markers
	var $clusterGridSize			= 60;						// The grid size of a cluster in pixels
	var $clusterMaxZoom				= '';						// The maximum zoom level that a marker can be part of a cluster
	var $clusterZoomOnClick			= TRUE;						// Whether the default behaviour of clicking on a cluster is to zoom into it
	var $clusterAverageCenter		= FALSE;					// Whether the center of each cluster should be the average of all markers in the cluster
	var $clusterMinimumClusterSize	= 2;						// The minimum number of markers to be in a cluster before the markers are hidden and a count is shown
	var $disableDefaultUI			= FALSE;					// If set to TRUE will hide the default controls (ie. zoom, scale etc)
	var $disableDoubleClickZoom		= FALSE;					// If set to TRUE will disable zooming when a double click occurs
	var $disableMapTypeControl		= FALSE;					// If set to TRUE will hide the MapType control (ie. Map, Satellite, Hybrid, Terrain)
	var $disableNavigationControl	= FALSE;					// If set to TRUE will hide the Navigation control (ie. zoom in/out, pan)
	var $disableScaleControl		= FALSE;					// If set to TRUE will hide the Scale control
	var $disableStreetViewControl	= FALSE;					// If set to TRUE will hide the Street View control
	var $draggable					= TRUE;						// If set to FALSE will prevent the map from being dragged around
	var $draggableCursor			= '';						// The name or url of the cursor to display on a draggable object
	var $draggingCursor				= '';						// The name or url of the cursor to display when an object is being dragged
	var $geocodeCaching				= FALSE;					// If set to TRUE will cache any geocode requests made when an address is used instead of a lat/long. Requires DB table to be created (see documentation)
	var $https						= FALSE;					// If set to TRUE will load the Google Maps JavaScript API over HTTPS, allowing you to utilize the API within your HTTPS secure application 
	var $navigationControlPosition	= '';						// The position of the Navigation control, eg. 'BOTTOM_RIGHT'
	var $infowindowMaxWidth			= 0;						// The maximum width of the infowindow in pixels. Expecting an integer without units
	var $keyboardShortcuts			= TRUE;						// If set to FALSE will disable to map being controlled via the keyboard
	var $jsfile						= '';						// Set this to the path of an external JS file if you wish the JavaScript to be placed in a file rather than output directly into the <head></head> section. The library will try to create the file if it does not exist already. Please ensure the destination file is writeable
	var $kmlLayerURL	}
