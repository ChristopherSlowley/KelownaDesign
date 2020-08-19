
<?php
/**
* @author Christopher E. Slowley
* @date June 25, 2017
* @purpose Stores all the site settings
*/


define("DB_SETTINGS", [
    "HOST_NAME" => "localhost",
    "USER_NAME" => "kdesignsadmin",
    "PASSWORD" => "chrisisroot",
    "DATABASE_NAME" => "kelownadesignsdb",
    "MENU_OPTIONS_TABLE_NAME" => "menuoptions",
    "CATALOGCATEGORIES_TABLE_NAME" => "catalogcategories",
    "CATALOGITEMS_TABLE_NAME" => "catalogitems",
    "CATALOGIINVENTORY_TABLE_NAME" => "cataloginventory",
]);

define("SITE_URLS", [
    "ROOT_URL" => "http://www.kelownadesigns.com/public_html/",
    "CSS_URL" => "http://www.kelownadesigns.com/public_html/css/",
    "PHP_URL" => "http://www.kelownadesigns.com/public_html/php/"
]);

define ( "GENERAL_SETTINGS", [
    "RELEASE_VERSION" => "1.2",
    "SITE_TITLE" => "Kelowna Designs Concept Site",
    "COPYRIGHT_INFORMATION" => "Copyright @ 2017 ChrisSoft Ltd.",
    "WEB_MASTER" => "Christpher Evan Slowley",
    "WEB_MASTER_EMAIL" => "christopherslowley@gmail.com",
    "WEB_MASTER_ADDRESS" => "104-1680 Burtch Road, Kelowna BC, V1Y 9K7, Canada"
]);

class SiteUrls {

   private $db_url = "localhost";
	private $db_username = "kdesignsadmin";
	private $db_password = "chrisisroot";

   private $site_title = "Kelowna Designs";
   private $site_url = "http://www.kelownadesigns.com/public_html";

   public function getDbUrl0() 
   {
      return $this->db_url;
   }

   public function getSiteCssUrl()
   {
       return $this->site_url."/css";
   }

   public function getSitePhpUrl()
   {
       return $this->site_url."/php";
   }
}

?>