{"filter":false,"title":"template.php","tooltip":"/application/config/template.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":0,"column":0},"end":{"row":76,"column":2},"action":"insert","lines":["<?php defined('BASEPATH') OR exit('No direct script access allowed');","/*","|--------------------------------------------------------------------------","| Parser Enabled","|--------------------------------------------------------------------------","|","| Should the Parser library be used for the entire page?","|","| Can be overridden with $this->template->enable_parser(TRUE/FALSE);","|","|   Default: TRUE","|","*/","$config['parser_enabled'] = TRUE;","/*","|--------------------------------------------------------------------------","| Parser Enabled for Body","|--------------------------------------------------------------------------","|","| If the parser is enabled, do you want it to parse the body or not?","|","| Can be overridden with $this->template->enable_parser(TRUE/FALSE);","|","|   Default: FALSE","|","*/","$config['parser_body_enabled'] = FALSE;","/*","|--------------------------------------------------------------------------","| Title Separator","|--------------------------------------------------------------------------","|","| What string should be used to separate title segments sent via $this->template->title('Foo', 'Bar');","|","|   Default: ' | '","|","*/","$config['title_separator'] = ' | ';","/*","|--------------------------------------------------------------------------","| Layout","|--------------------------------------------------------------------------","|","| Which layout file should be used? When combined with theme it will be a layout file in that theme","|","| Change to 'main' to get /application/views/layouts/main.php","|","|   Default: 'default'","|","*/","$config['layout'] = 'default';","/*","|--------------------------------------------------------------------------","| Theme","|--------------------------------------------------------------------------","|","| Which theme to use by default?","|","| Can be overriden with $this->template->set_theme('foo');","|","|   Default: ''","|","*/","$config['theme'] = '';","/*","|--------------------------------------------------------------------------","| Theme Locations","|--------------------------------------------------------------------------","|","| Where should we expect to see themes?","|","|\tDefault: array(APPPATH.'themes/' => '../themes/')","|","*/","$config['theme_locations'] = array(","\tAPPPATH.'themes/'",");"],"id":1}],[{"start":{"row":50,"column":21},"end":{"row":50,"column":28},"action":"remove","lines":["default"],"id":2},{"start":{"row":50,"column":21},"end":{"row":50,"column":56},"action":"insert","lines":["/application/views/layouts/main.php"]}],[{"start":{"row":50,"column":21},"end":{"row":50,"column":22},"action":"remove","lines":["/"],"id":3}],[{"start":{"row":50,"column":21},"end":{"row":50,"column":22},"action":"insert","lines":["/"],"id":4}]]},"ace":{"folds":[],"scrolltop":420,"scrollleft":0,"selection":{"start":{"row":53,"column":7},"end":{"row":53,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":31,"state":"php-comment","mode":"ace/mode/php"}},"timestamp":1477379946025,"hash":"3fc4ee755e63c05444afea5547d275a75d72aad6"}