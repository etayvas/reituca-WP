<?php 
include_once('geoip.inc');

if ( !class_exists('VisitorCountry') ) :

class VisitorCountry {
    public $mPluginDir = '';
    public $mPluginUrl = '';

    private static $instance = null;

    public $mIP   = '127.0.0.1';
    public $mCode = '??';
    public $mName = 'Somewhere in the world';

    // constructor (old school)
    public function __construct()
    {
        $this->LoadVisitorData();
        $this->SetupActions();
        $this->AddShortcodes();
    }
    
    public static function create() {
      if (is_null(static::$instance)) {
         static::$instance = new static();
      }
      return static::$instance;
    }
    
    // Loads the visitor data
    function LoadVisitorData()
    {
        // Get the path of the plugin
        $this->mPluginDir = dirname(__FILE__) . '/';
        $this->mPluginUrl = '';
                
        // Include MaxMind's API
        /*include( '/home/content/08/10374308/html/lp/wp-content/plugins/visitor-country/geoip.inc');*/
    
        // Get the visitor IP
        $iIp = $_SERVER[ 'REMOTE_ADDR' ];
        if ( !empty( $_SERVER[ 'HTTP_CLIENT_IP' ] ) ) 
        {               
            // check ip from share internet
            $iIp = $_SERVER[ 'HTTP_CLIENT_IP' ];
        } elseif ( !empty( $_SERVER[ 'HTTP_X_FORWARDED_FOR'] ) )
        {
            // to check ip is pass from proxy
            $iIp = $_SERVER[ 'HTTP_X_FORWARDED_FOR' ];
        }
        $iIpList = explode(",", $iIp);
        $this->mIP=$iIpList[0];
    
        // Connect to MaxMind's GeoIP
        $iGeoIP = geoip_open( $this->mPluginDir . 'GeoIP.dat', GEOIP_STANDARD);
        
        // Get the country id
        $iCountryID = geoip_country_id_by_addr( $iGeoIP, $this->mIP );
        
        if ( $iCountryID !== false ) {
            // Lookup country code and name
            $this->mCode = $iGeoIP->GEOIP_COUNTRY_CODES[$iCountryID];
            $this->mName = $iGeoIP->GEOIP_COUNTRY_NAMES[$iCountryID];            
        }
                
        // Close MaxMind's connection
        geoip_close($iGeoIP);
    }
    
    function SetupActions()
    {
        // Add javascript vars once the head is rendered
        //add_action('wp_head', array($this, 'addJavaScriptVars'), 100);
    }
    
    function addJavaScriptVars()
    {
        // We'll be using wp_localize_script to properly add CDATA block. Somewhat oddly we need to load a js script
        // before we can call it, so just load the currently blank visitor-country.js script.
        wp_enqueue_script( 'VisitorCountry', $this->mPluginUrl . 'visitor-country.js');        
        wp_localize_script( 'VisitorCountry', 'VisitorCountry', array(
            'ip'   => $this->GetIP(),
            'code' => $this->GetCode(),
            'name' => $this->GetName()
        ));        
    }
    
    function AddShortcodes()
    {
        // Now lets add some shortcodes
       // add_shortcode( 'VisitorCountry-Code', array(&$this, 'GetCode') );
      //  add_shortcode( 'VisitorCountry-Name', array(&$this, 'GetName') );
       // add_shortcode( 'VisitorCountry-IP', array(&$this, 'GetIP') );      
    }

    // PHP getters
    
    function GetIP() {
        return $this->mIP;
    }
    
    function GetCode() {
        return $this->mCode;
    }
    
    function GetName() {
        return $this->mName;
    }       
}

$GLOBALS['VisitorCountry'] = new VisitorCountry();


endif; // class_exists check