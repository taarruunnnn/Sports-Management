{"filter":false,"title":"Template.php","tooltip":"/application/libraries/Template.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":674,"column":21},"action":"insert","lines":["<?php defined('BASEPATH') OR exit('No direct script access allowed');","/**"," * CodeIgniter Template Class"," *"," * Build your CodeIgniter pages much easier with partials, breadcrumbs, layouts and themes"," *"," * @package\t\t\tCodeIgniter"," * @subpackage\t\tLibraries"," * @category\t\tLibraries"," * @author\t\t\tPhilip Sturgeon"," * @license\t\t\thttp://philsturgeon.co.uk/code/dbad-license"," * @link\t\t\thttp://getsparks.org/packages/template/show"," */","class Template","{","\tprivate $_module = '';","\tprivate $_controller = '';","\tprivate $_method = '';","\tprivate $_theme = NULL;","\tprivate $_theme_path = NULL;","\tprivate $_layout = FALSE; // By default, dont wrap the view with anything","\tprivate $_layout_subdir = ''; // Layouts and partials will exist in views/layouts","\t// but can be set to views/foo/layouts with a subdirectory","\tprivate $_title = '';","\tprivate $_metadata = array();","\tprivate $_partials = array();","\tprivate $_breadcrumbs = array();","\tprivate $_title_separator = ' | ';","\tprivate $_parser_enabled = TRUE;","\tprivate $_parser_body_enabled = TRUE;","\tprivate $_theme_locations = array();","\tprivate $_is_mobile = FALSE;","\t// Minutes that cache will be alive for","\tprivate $cache_lifetime = 0;","\tprivate $_ci;","\tprivate $_data = array();","\t/**","\t * Constructor - Sets Preferences","\t *","\t * The constructor can be passed an array of config values","\t */","\tfunction __construct($config = array())","\t{","\t\t$this->_ci =& get_instance();","\t\tif ( ! empty($config))","\t\t{","\t\t\t$this->initialize($config);","\t\t}","\t\tlog_message('debug', 'Template Class Initialized');","\t}","\t// --------------------------------------------------------------------","\t/**","\t * Initialize preferences","\t *","\t * @access\tpublic","\t * @param\tarray","\t * @return\tvoid","\t */","\tfunction initialize($config = array())","\t{","\t\tforeach ($config as $key => $val)","\t\t{","\t\t\tif ($key == 'theme' AND $val != '')","\t\t\t{","\t\t\t\t$this->set_theme($val);","\t\t\t\tcontinue;","\t\t\t}","\t\t\t$this->{'_'.$key} = $val;","\t\t}","\t\t// No locations set in config?","\t\tif ($this->_theme_locations === array())","\t\t{","\t\t\t// Let's use this obvious default","\t\t\t$this->_theme_locations = array(APPPATH . 'themes/');","\t\t}","\t\t","\t\t// Theme was set","\t\tif ($this->_theme)","\t\t{","\t\t\t$this->set_theme($this->_theme);","\t\t}","\t\t// If the parse is going to be used, best make sure it's loaded","\t\tif ($this->_parser_enabled === TRUE)","\t\t{","\t\t\t$this->_ci->load->library('parser');","\t\t}","\t\t// Modular Separation / Modular Extensions has been detected","\t\tif (method_exists( $this->_ci->router, 'fetch_module' ))","\t\t{","\t\t\t$this->_module \t= $this->_ci->router->fetch_module();","\t\t}","\t\t// What controllers or methods are in use","\t\t$this->_controller\t= $this->_ci->router->fetch_class();","\t\t$this->_method \t\t= $this->_ci->router->fetch_method();","\t\t// Load user agent library if not loaded","\t\t$this->_ci->load->library('user_agent');","\t\t// We'll want to know this later","\t\t$this->_is_mobile\t= $this->_ci->agent->is_mobile();","\t}","\t// --------------------------------------------------------------------","\t/**","\t * Magic Get function to get data","\t *","\t * @access\tpublic","\t * @param\t  string","\t * @return\tmixed","\t */","\tpublic function __get($name)","\t{","\t\treturn isset($this->_data[$name]) ? $this->_data[$name] : NULL;","\t}","\t// --------------------------------------------------------------------","\t/**","\t * Magic Set function to set data","\t *","\t * @access\tpublic","\t * @param\t  string","\t * @return\tmixed","\t */","\tpublic function __set($name, $value)","\t{","\t\t$this->_data[$name] = $value;","\t}","\t// --------------------------------------------------------------------","\t/**","\t * Set data using a chainable metod. Provide two strings or an array of data.","\t *","\t * @access\tpublic","\t * @param\t  string","\t * @return\tmixed","\t */","\tpublic function set($name, $value = NULL)","\t{","\t\t// Lots of things! Set them all","\t\tif (is_array($name) OR is_object($name))","\t\t{","\t\t\tforeach ($name as $item => $value)","\t\t\t{","\t\t\t\t$this->_data[$item] = $value;","\t\t\t}","\t\t}","\t\t// Just one thing, set that","\t\telse","\t\t{","\t\t\t$this->_data[$name] = $value;","\t\t}","\t\treturn $this;","\t}","\t// --------------------------------------------------------------------","\t/**","\t * Build the entire HTML output combining partials, layouts and views.","\t *","\t * @access\tpublic","\t * @param\tstring","\t * @return\tvoid","\t */","\tpublic function build($view, $data = array(), $return = FALSE)","\t{","\t\t// Set whatever values are given. These will be available to all view files","\t\tis_array($data) OR $data = (array) $data;","\t\t// Merge in what we already have with the specific data","\t\t$this->_data = array_merge($this->_data, $data);","\t\t// We don't need you any more buddy","\t\tunset($data);","\t\tif (empty($this->_title))","\t\t{","\t\t\t$this->_title = $this->_guess_title();","\t\t}","\t\t// Output template variables to the template","\t\t$template['title']\t= $this->_title;","\t\t$template['breadcrumbs'] = $this->_breadcrumbs;","\t\t$template['metadata']\t= implode(\"\\n\\t\\t\", $this->_metadata);","\t\t$template['partials']\t= array();","\t\t// Assign by reference, as all loaded views will need access to partials","\t\t$this->_data['template'] =& $template;","\t\tforeach ($this->_partials as $name => $partial)","\t\t{","\t\t\t// We can only work with data arrays","\t\t\tis_array($partial['data']) OR $partial['data'] = (array) $partial['data'];","\t\t\t// If it uses a view, load it","\t\t\tif (isset($partial['view']))","\t\t\t{","\t\t\t\t$template['partials'][$name] = $this->_find_view($partial['view'], $partial['data']);","\t\t\t}","\t\t\t// Otherwise the partial must be a string","\t\t\telse","\t\t\t{","\t\t\t\tif ($this->_parser_enabled === TRUE)","\t\t\t\t{","\t\t\t\t\t$partial['string'] = $this->_ci->parser->parse_string($partial['string'], $this->_data + $partial['data'], TRUE, TRUE);","\t\t\t\t}","\t\t\t\t$template['partials'][$name] = $partial['string'];","\t\t\t}","\t\t}","\t\t// Disable sodding IE7's constant cacheing!!","\t\t$this->_ci->output->set_header('Expires: Sat, 01 Jan 2000 00:00:01 GMT');","\t\t$this->_ci->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');","\t\t$this->_ci->output->set_header('Cache-Control: post-check=0, pre-check=0, max-age=0');","\t\t$this->_ci->output->set_header('Last-Modified: ' . gmdate( 'D, d M Y H:i:s' ) . ' GMT' );","\t\t$this->_ci->output->set_header('Pragma: no-cache');","\t\t// Let CI do the caching instead of the browser","\t\t$this->_ci->output->cache($this->cache_lifetime);","\t\t// Test to see if this file","\t\t$this->_body = $this->_find_view($view, array(), $this->_parser_body_enabled);","\t\t// Want this file wrapped with a layout file?","\t\tif ($this->_layout)","\t\t{","\t\t\t// Added to $this->_data['template'] by refference","\t\t\t$template['body'] = $this->_body;","\t\t\t// Find the main body and 3rd param means parse if its a theme view (only if parser is enabled)","\t\t\t$this->_body =  self::_load_view('layouts/'.$this->_layout, $this->_data, TRUE, self::_find_view_folder());","\t\t}","\t\t// Want it returned or output to browser?","\t\tif ( ! $return)","\t\t{","\t\t\t$this->_ci->output->set_output($this->_body);","\t\t}","\t\treturn $this->_body;","\t}","\t/**","\t * Set the title of the page","\t *","\t * @access\tpublic","\t * @param\tstring","\t * @return\tvoid","\t */","\tpublic function title()","\t{","\t\t// If we have some segments passed","\t\tif (func_num_args() >= 1)","\t\t{","\t\t\t$title_segments = func_get_args();","\t\t\t$this->_title = implode($this->_title_separator, $title_segments);","\t\t}","\t\treturn $this;","\t}","\t/**","\t * Put extra javascipt, css, meta tags, etc before all other head data","\t *","\t * @access\tpublic","\t * @param\t string\t$line\tThe line being added to head","\t * @return\tvoid","\t */","\tpublic function prepend_metadata($line)","\t{","\t\tarray_unshift($this->_metadata, $line);","\t\treturn $this;","\t}","\t/**","\t * Put extra javascipt, css, meta tags, etc after other head data","\t *","\t * @access\tpublic","\t * @param\t string\t$line\tThe line being added to head","\t * @return\tvoid","\t */","\tpublic function append_metadata($line)","\t{","\t\t$this->_metadata[] = $line;","\t\treturn $this;","\t}","\t/**","\t * Set metadata for output later","\t *","\t * @access\tpublic","\t * @param\t  string\t$name\t\tkeywords, description, etc","\t * @param\t  string\t$content\tThe content of meta data","\t * @param\t  string\t$type\t\tMeta-data comes in a few types, links for example","\t * @return\tvoid","\t */","\tpublic function set_metadata($name, $content, $type = 'meta')","\t{","\t\t$name = htmlspecialchars(strip_tags($name));","\t\t$content = htmlspecialchars(strip_tags($content));","\t\t// Keywords with no comments? ARG! comment them","\t\tif ($name == 'keywords' AND ! strpos($content, ','))","\t\t{","\t\t\t$content = preg_replace('/[\\s]+/', ', ', trim($content));","\t\t}","\t\tswitch($type)","\t\t{","\t\t\tcase 'meta':","\t\t\t\t$this->_metadata[$name] = '<meta name=\"'.$name.'\" content=\"'.$content.'\" />';","\t\t\tbreak;","\t\t\tcase 'link':","\t\t\t\t$this->_metadata[$content] = '<link rel=\"'.$name.'\" href=\"'.$content.'\" />';","\t\t\tbreak;","\t\t}","\t\treturn $this;","\t}","\t/**","\t * Which theme are we using here?","\t *","\t * @access\tpublic","\t * @param\tstring\t$theme\tSet a theme for the template library to use","\t * @return\tvoid","\t */","\tpublic function set_theme($theme = NULL)","\t{","\t\t$this->_theme = $theme;","\t\tforeach ($this->_theme_locations as $location)","\t\t{","\t\t\tif ($this->_theme AND file_exists($location.$this->_theme))","\t\t\t{","\t\t\t\t$this->_theme_path = rtrim($location.$this->_theme.'/');","\t\t\t\tbreak;","\t\t\t}","\t\t}","\t\treturn $this;","\t}","\t/**","\t * Get the current theme","\t *","\t * @access public","\t * @return string\tThe current theme","\t */","\t public function get_theme()","\t {","\t \treturn $this->_theme;","\t }","\t/**","\t * Get the current theme path","\t *","\t * @access\tpublic","\t * @return\tstring The current theme path","\t */","\tpublic function get_theme_path()","\t{","\t\treturn $this->_theme_path;","\t}","\t/**","\t * Which theme layout should we using here?","\t *","\t * @access\tpublic","\t * @param\tstring\t$view","\t * @return\tvoid","\t */","\tpublic function set_layout($view, $_layout_subdir = '')","\t{","\t\t$this->_layout = $view;","\t\t$_layout_subdir AND $this->_layout_subdir = $_layout_subdir;","\t\treturn $this;","\t}","\t/**","\t * Set a view partial","\t *","\t * @access\tpublic","\t * @param\tstring","\t * @param\tstring","\t * @param\tboolean","\t * @return\tvoid","\t */","\tpublic function set_partial($name, $view, $data = array())","\t{","\t\t$this->_partials[$name] = array('view' => $view, 'data' => $data);","\t\treturn $this;","\t}","\t/**","\t * Set a view partial","\t *","\t * @access\tpublic","\t * @param\tstring","\t * @param\tstring","\t * @param\tboolean","\t * @return\tvoid","\t */","\tpublic function inject_partial($name, $string, $data = array())","\t{","\t\t$this->_partials[$name] = array('string' => $string, 'data' => $data);","\t\treturn $this;","\t}","\t/**","\t * Helps build custom breadcrumb trails","\t *","\t * @access\tpublic","\t * @param\tstring\t$name\t\tWhat will appear as the link text","\t * @param\tstring\t$url_ref\tThe URL segment","\t * @return\tvoid","\t */","\tpublic function set_breadcrumb($name, $uri = '')","\t{","\t\t$this->_breadcrumbs[] = array('name' => $name, 'uri' => $uri );","\t\treturn $this;","\t}","\t/**","\t * Set a the cache lifetime","\t *","\t * @access\tpublic","\t * @param\tstring","\t * @param\tstring","\t * @param\tboolean","\t * @return\tvoid","\t */","\tpublic function set_cache($minutes = 0)","\t{","\t\t$this->cache_lifetime = $minutes;","\t\treturn $this;","\t}","\t/**","\t * enable_parser","\t * Should be parser be used or the view files just loaded normally?","\t *","\t * @access\tpublic","\t * @param\t string\t$view","\t * @return\tvoid","\t */","\tpublic function enable_parser($bool)","\t{","\t\t$this->_parser_enabled = $bool;","\t\treturn $this;","\t}","\t/**","\t * enable_parser_body","\t * Should be parser be used or the body view files just loaded normally?","\t *","\t * @access\tpublic","\t * @param\t string\t$view","\t * @return\tvoid","\t */","\tpublic function enable_parser_body($bool)","\t{","\t\t$this->_parser_body_enabled = $bool;","\t\treturn $this;","\t}","\t/**","\t * theme_locations","\t * List the locations where themes may be stored","\t *","\t * @access\tpublic","\t * @param\t string\t$view","\t * @return\tarray","\t */","\tpublic function theme_locations()","\t{","\t\treturn $this->_theme_locations;","\t}","\t/**","\t * add_theme_location","\t * Set another location for themes to be looked in","\t *","\t * @access\tpublic","\t * @param\t string\t$view","\t * @return\tarray","\t */","\tpublic function add_theme_location($location)","\t{","\t\t$this->_theme_locations[] = $location;","\t}","\t/**","\t * theme_exists","\t * Check if a theme exists","\t *","\t * @access\tpublic","\t * @param\t string\t$view","\t * @return\tarray","\t */","\tpublic function theme_exists($theme = NULL)","\t{","\t\t$theme OR $theme = $this->_theme;","\t\tforeach ($this->_theme_locations as $location)","\t\t{","\t\t\tif (is_dir($location.$theme))","\t\t\t{","\t\t\t\treturn TRUE;","\t\t\t}","\t\t}","\t\treturn FALSE;","\t}","\t/**","\t * get_layouts","\t * Get all current layouts (if using a theme you'll get a list of theme layouts)","\t *","\t * @access\tpublic","\t * @param\t string\t$view","\t * @return\tarray","\t */","\tpublic function get_layouts()","\t{","\t\t$layouts = array();","\t\tforeach(glob(self::_find_view_folder().'layouts/*.*') as $layout)","\t\t{","\t\t\t$layouts[] = pathinfo($layout, PATHINFO_BASENAME);","\t\t}","\t\treturn $layouts;","\t}","\t/**","\t * get_layouts","\t * Get all current layouts (if using a theme you'll get a list of theme layouts)","\t *","\t * @access\tpublic","\t * @param\t string\t$view","\t * @return\tarray","\t */","\tpublic function get_theme_layouts($theme = NULL)","\t{","\t\t$theme OR $theme = $this->_theme;","\t\t$layouts = array();","\t\tforeach ($this->_theme_locations as $location)","\t\t{","\t\t\t// Get special web layouts","\t\t\tif( is_dir($location.$theme.'/views/web/layouts/') )","\t\t\t{","\t\t\t\tforeach(glob($location.$theme . '/views/web/layouts/*.*') as $layout)","\t\t\t\t{","\t\t\t\t\t$layouts[] = pathinfo($layout, PATHINFO_BASENAME);","\t\t\t\t}","\t\t\t\tbreak;","\t\t\t}","\t\t\t// So there are no web layouts, assume all layouts are web layouts","\t\t\tif(is_dir($location.$theme.'/views/layouts/'))","\t\t\t{","\t\t\t\tforeach(glob($location.$theme . '/views/layouts/*.*') as $layout)","\t\t\t\t{","\t\t\t\t\t$layouts[] = pathinfo($layout, PATHINFO_BASENAME);","\t\t\t\t}","\t\t\t\tbreak;","\t\t\t}","\t\t}","\t\treturn $layouts;","\t}","\t/**","\t * layout_exists","\t * Check if a theme layout exists","\t *","\t * @access\tpublic","\t * @param\t string\t$view","\t * @return\tarray","\t */","\tpublic function layout_exists($layout)","\t{","\t\t// If there is a theme, check it exists in there","\t\tif ( ! empty($this->_theme) AND in_array($layout, self::get_theme_layouts()))","\t\t{","\t\t\treturn TRUE;","\t\t}","\t\t// Otherwise look in the normal places","\t\treturn file_exists(self::_find_view_folder().'layouts/' . $layout . self::_ext($layout));","\t}","\t/**","\t * load_view","\t * Load views from theme paths if they exist.","\t *","\t * @access\tpublic","\t * @param\tstring\t$view","\t * @param\tmixed\t$data","\t * @return\tarray","\t */","\tpublic function load_view($view, $data = array())","\t{","\t\treturn $this->_find_view($view, (array)$data);","\t}","\t// find layout files, they could be mobile or web","\tprivate function _find_view_folder()","\t{","\t\tif ($this->_ci->load->get_var('template_views'))","\t\t{","\t\t\treturn $this->_ci->load->get_var('template_views');","\t\t}","\t\t// Base view folder","\t\t$view_folder = APPPATH.'views/';","\t\t// Using a theme? Put the theme path in before the view folder","\t\tif ( ! empty($this->_theme))","\t\t{","\t\t\t$view_folder = $this->_theme_path.'views/';","\t\t}","\t\t// Would they like the mobile version?","\t\tif ($this->_is_mobile === TRUE AND is_dir($view_folder.'mobile/'))","\t\t{","\t\t\t// Use mobile as the base location for views","\t\t\t$view_folder .= 'mobile/';","\t\t}","\t\t// Use the web version","\t\telse if (is_dir($view_folder.'web/'))","\t\t{","\t\t\t$view_folder .= 'web/';","\t\t}","\t\t// Things like views/admin/web/view admin = subdir","\t\tif ($this->_layout_subdir)","\t\t{","\t\t\t$view_folder .= $this->_layout_subdir.'/';","\t\t}","\t\t// If using themes store this for later, available to all views","\t\t$this->_ci->load->vars('template_views', $view_folder);","\t\t","\t\treturn $view_folder;","\t}","\t// A module view file can be overriden in a theme","\tprivate function _find_view($view, array $data, $parse_view = TRUE)","\t{","\t\t// Only bother looking in themes if there is a theme","\t\tif ( ! empty($this->_theme))","\t\t{","\t\t\tforeach ($this->_theme_locations as $location)","\t\t\t{","\t\t\t\t$theme_views = array(","\t\t\t\t\t$this->_theme . '/views/modules/' . $this->_module . '/' . $view,","\t\t\t\t\t$this->_theme . '/views/' . $view","\t\t\t\t);","\t\t\t\tforeach ($theme_views as $theme_view)","\t\t\t\t{","\t\t\t\t\tif (file_exists($location . $theme_view . self::_ext($theme_view)))","\t\t\t\t\t{","\t\t\t\t\t\treturn self::_load_view($theme_view, $this->_data + $data, $parse_view, $location);","\t\t\t\t\t}","\t\t\t\t}","\t\t\t}","\t\t}","\t\t// Not found it yet? Just load, its either in the module or root view","\t\treturn self::_load_view($view, $this->_data + $data, $parse_view);","\t}","\tprivate function _load_view($view, array $data, $parse_view = TRUE, $override_view_path = NULL)","\t{","\t\t// Sevear hackery to load views from custom places AND maintain compatibility with Modular Extensions","\t\tif ($override_view_path !== NULL)","\t\t{","\t\t\tif ($this->_parser_enabled === TRUE AND $parse_view === TRUE)","\t\t\t{","\t\t\t\t// Load content and pass through the parser","\t\t\t\t$content = $this->_ci->parser->parse_string($this->_ci->load->file(","\t\t\t\t\t$override_view_path.$view.self::_ext($view), ","\t\t\t\t\tTRUE","\t\t\t\t), $data, TRUE);","\t\t\t}","\t\t\telse","\t\t\t{","\t\t\t\t$this->_ci->load->vars($data);","\t\t\t\t","\t\t\t\t// Load it directly, bypassing $this->load->view() as ME resets _ci_view","\t\t\t\t$content = $this->_ci->load->file(","\t\t\t\t\t$override_view_path.$view.self::_ext($view),","\t\t\t\t\tTRUE","\t\t\t\t);","\t\t\t}","\t\t}","\t\t// Can just run as usual","\t\telse","\t\t{","\t\t\t// Grab the content of the view (parsed or loaded)","\t\t\t$content = ($this->_parser_enabled === TRUE AND $parse_view === TRUE)","\t\t\t\t// Parse that bad boy","\t\t\t\t? $this->_ci->parser->parse($view, $data, TRUE)","\t\t\t\t// None of that fancy stuff for me!","\t\t\t\t: $this->_ci->load->view($view, $data, TRUE);","\t\t}","\t\treturn $content;","\t}","\tprivate function _guess_title()","\t{","\t\t$this->_ci->load->helper('inflector');","\t\t// Obviously no title, lets get making one","\t\t$title_parts = array();","\t\t// If the method is something other than index, use that","\t\tif ($this->_method != 'index')","\t\t{","\t\t\t$title_parts[] = $this->_method;","\t\t}","\t\t// Make sure controller name is not the same as the method name","\t\tif ( ! in_array($this->_controller, $title_parts))","\t\t{","\t\t\t$title_parts[] = $this->_controller;","\t\t}","\t\t// Is there a module? Make sure it is not named the same as the method or controller","\t\tif ( ! empty($this->_module) AND ! in_array($this->_module, $title_parts))","\t\t{","\t\t\t$title_parts[] = $this->_module;","\t\t}","\t\t// Glue the title pieces together using the title separator setting","\t\t$title = humanize(implode($this->_title_separator, $title_parts));","\t\treturn $title;","\t}","\tprivate function _ext($file)","\t{","\t\treturn pathinfo($file, PATHINFO_EXTENSION) ? '' : '.php';","\t}","}","// END Template class"],"id":1}],[{"start":{"row":1,"column":0},"end":{"row":12,"column":3},"action":"remove","lines":["/**"," * CodeIgniter Template Class"," *"," * Build your CodeIgniter pages much easier with partials, breadcrumbs, layouts and themes"," *"," * @package\t\t\tCodeIgniter"," * @subpackage\t\tLibraries"," * @category\t\tLibraries"," * @author\t\t\tPhilip Sturgeon"," * @license\t\t\thttp://philsturgeon.co.uk/code/dbad-license"," * @link\t\t\thttp://getsparks.org/packages/template/show"," */"],"id":2}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":5,"column":27},"end":{"row":5,"column":27},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1477379658235,"hash":"597942d1269866d48d07e7bfbdcc4630ec292a42"}