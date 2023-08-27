<?php

$config = array();
$config['name'] = "huge";
$config['author'] = "Luminous Labs";
$config['version'] = "1.0";
$config['url'] = "https://github.com/luminouslabsbd/boost";
$config['standalone_module_skins'] = true;
$config['framework'] = "bootstrap5";
$config['optimized_template'] = "yes";
$config['optimized_blog_module'] = "yes";
$config['is_default'] = 1; //if you set this parameter the template will be selected on the install screen

//Stylesheet Settings / accept type="color" and type="text" and type="title" and type="delimiter"
$config['stylesheet_compiler']['source_file'] = 'assets/css/less/main.less';
$config['stylesheet_compiler']['css_file'] = 'assets/css/main.css';

$config['stylesheet_compiler']['settings'][] = array('type' => 'title', 'label' => 'Default colors');
//$config['stylesheet_compiler']['settings']['default'] = array('type' => 'color', 'default' => '#212529', 'label' => 'Default color');
$config['stylesheet_compiler']['settings']['primary'] = array('type' => 'color', 'default' => '#47C1BF', 'label' => 'Primary color');
$config['stylesheet_compiler']['settings']['secondaryColor'] = array('type' => 'color', 'default' => '#50248f', 'label' => 'Secondary color');



// Menu Options
$config['stylesheet_compiler']['settings'][] = array('type' => 'title', 'label' => 'Menu Options');
$config['stylesheet_compiler']['settings']['menuFontColor'] = array('type' => 'color', 'default' => '#230051', 'label' => 'Font Color');
$config['stylesheet_compiler']['settings']['menuFontHoverColor'] = array('type' => 'color', 'default' => '#230051', 'label' => 'Hover And Active Color');

$config['stylesheet_compiler']['settings']['submenuContainerBackground'] = array('type' => 'color', 'default' => '#fff', 'label' => 'Submenu Background');
$config['stylesheet_compiler']['settings']['submenuColor'] = array('type' => 'color', 'default' => '#230051', 'label' => 'Submenu Color');
$config['stylesheet_compiler']['settings']['submenuItemHoverBg'] = array('type' => 'color', 'default' => '#fff', 'label' => 'Submenu Item Hover Background');
$config['stylesheet_compiler']['settings']['submenuItemHoverColor'] = array('type' => 'color', 'default' => '#230051', 'label' => 'Submenu Item Hover Color');
// Member menu icon
$config['stylesheet_compiler']['settings']['headerIconColor'] = array('type' => 'color', 'default' => '#230051', 'label' => 'Header icon color');
$config['stylesheet_compiler']['settings']['headerIconLabelColor'] = array('type' => 'color', 'default' => '#230051', 'label' => 'Header icons label color');

$config['stylesheet_compiler']['settings'][] = array('type' => 'delimiter');
$config['stylesheet_compiler']['settings']['mobileHeaderBg'] = array('type' => 'color', 'default' => '#fff', 'label' => 'Mobile header Background');
$config['stylesheet_compiler']['settings']['mobileHeaderIconsColor'] = array('type' => 'color', 'default' => '#000', 'label' => 'Mobile header icons');

// User menu color options
$config['stylesheet_compiler']['settings'][] = array('type' => 'title', 'label' => 'User Menu Options');
$config['stylesheet_compiler']['settings']['usermenuBg'] = array('type' => 'color', 'default' => '#fff', 'label' => 'User Menu Background');
$config['stylesheet_compiler']['settings']['usermenuColor'] = array('type' => 'color', 'default' => '#230051', 'label' => 'User Menu Color');
$config['stylesheet_compiler']['settings']['usermenuHoverBg'] = array('type' => 'color', 'default' => '#fff', 'label' => 'User Menu Hover Background');
$config['stylesheet_compiler']['settings']['usermenuHoverColor'] = array('type' => 'color', 'default' => '#230051', 'label' => 'User Menu Hover Color');

$config['stylesheet_compiler']['settings']['menuFontSize'] = array('type' => 'text', 'default' => '16px', 'label' => 'Font Size');
$config['stylesheet_compiler']['settings'][] = array('type' => 'delimiter');

$config['stylesheet_compiler']['settings'][] = array('type' => 'title', 'label' => 'Footer Menu Options');
$config['stylesheet_compiler']['settings']['footerMenuColor'] = array('type' => 'color', 'default' => '#CCE6E8', 'label' => 'Footer Menu Color');
$config['stylesheet_compiler']['settings']['footerMenuHoverColor'] = array('type' => 'color', 'default' => '#fff', 'label' => 'Footer Menu Hover Color');

$config['stylesheet_compiler']['settings'][] = array('type' => 'delimiter');

// Category Options

$config['stylesheet_compiler']['settings'][] = array('type' => 'title', 'label' => 'Category Options');
$config['stylesheet_compiler']['settings']['categoryFontColor'] = array('type' => 'color', 'default' => '#230051', 'label' => 'Font Color');
$config['stylesheet_compiler']['settings']['categoryFontHoverColor'] = array('type' => 'color', 'default' => '#230051', 'label' => 'Hover And Active Color');

$config['stylesheet_compiler']['settings'][] = array('type' => 'delimiter');

$config['stylesheet_compiler']['settings'][] = array('type' => 'title', 'label' => 'Search Box colors');
$config['stylesheet_compiler']['settings']['searchInputField'] = array('type' => 'color', 'default' => '#230051', 'label' => 'Search Input Field Color');
$config['stylesheet_compiler']['settings']['searchButtonColor'] = array('type' => 'color', 'default' => '#230051', 'label' => 'Search Button Color');

$config['stylesheet_compiler']['settings'][] = array('type' => 'delimiter');

$config['stylesheet_compiler']['settings'][] = array('type' => 'delimiter');

$config['stylesheet_compiler']['settings'][] = array('type' => 'title', 'label' => 'Pricing Table Colors');
$config['stylesheet_compiler']['settings']['pricingtableHoverBgColor'] = array('type' => 'color', 'default' => '#f0f1f2', 'label' => 'Row Hover Color');
$config['stylesheet_compiler']['settings']['pricingtableHeadingTd'] = array('type' => 'color', 'default' => '#e2e2e2', 'label' => 'Heading Row Background');
$config['stylesheet_compiler']['settings']['pricingtableHeadingTdColor'] = array('type' => 'color', 'default' => '#6b7177', 'label' => 'Heading Row Text Color');
$config['stylesheet_compiler']['settings']['pricingtableTd'] = array('type' => 'color', 'default' => '#fff', 'label' => 'Row Background');
$config['stylesheet_compiler']['settings']['pricingtableTdColor'] = array('type' => 'color', 'default' => '#230051', 'label' => 'Row Text Color');


$config['stylesheet_compiler']['settings'][] = array('type' => 'title', 'label' => 'Others Color');
$config['stylesheet_compiler']['settings']['taxTextColor'] = array('type' => 'color', 'default' => '#230051', 'label' => 'Tax Text Color');
$config['stylesheet_compiler']['settings']['settingsHeaderBg'] = array('type' => 'color', 'default' => '#47C1BF', 'label' => 'Settings Module Header BG');

$config['stylesheet_compiler']['settings']['allFontColor'] = array('type' => 'color', 'default' => ' ', 'label' => 'Font color for everything except product text');
$config['stylesheet_compiler']['settings']['productTextFontColor'] = array('type' => 'color', 'default' => ' ', 'label' => 'Font color for Product texts');

$config['stylesheet_compiler']['settings']['nexPrevtipbgColor'] = array('type' => 'color', 'default' => '#000', 'label' => 'Product Next Prev Tooltip Background');

$config['stylesheet_compiler']['settings'][] = array('type' => 'delimiter');

$config['stylesheet_compiler']['settings'][] = array('type' => 'title', 'label' => 'Image Opacity');
$config['stylesheet_compiler']['settings']['blogImgOpacity'] = array('type' => 'sliderRange', 'default' => '99', 'label' => 'Blog Image');
$config['stylesheet_compiler']['settings']['blogInnerImgOpacity'] = array('type' => 'sliderRange', 'default' => '99', 'label' => 'Blog Inner Image');
$config['stylesheet_compiler']['settings']['productImgOpacity'] = array('type' => 'sliderRange', 'default' => '99', 'label' => 'Product Image');
$config['stylesheet_compiler']['settings']['productInnerImageOpacity'] = array('type' => 'sliderRange', 'default' => '99', 'label' => 'Product Inner Image');

$config['stylesheet_compiler']['settings'][] = array('type' => 'delimiter');
$config['stylesheet_compiler']['settings'][] = array('type' => 'title', 'label' => 'Side Navigation');
$config['stylesheet_compiler']['settings']['sideNavTextColor'] = array('type' => 'color', 'default' => '#636363', 'label' => 'Nav text color');
$config['stylesheet_compiler']['settings']['sideNavTextBGColor'] = array('type' => 'color', 'default' => '#d9ecff', 'label' => 'Nav text BG color');
$config['stylesheet_compiler']['settings']['sideNavTextHoverColor'] = array('type' => 'color', 'default' => '#636363', 'label' => 'Nav text hover color');
$config['stylesheet_compiler']['settings']['sideNavTextHoverBGColor'] = array('type' => 'color', 'default' => '#57adff', 'label' => 'Nav text hover BG color');
$config['stylesheet_compiler']['settings']['sideNavlistBGColor'] = array('type' => 'color', 'default' => '#fff', 'label' => 'Sidenav list Background color');
$config['stylesheet_compiler']['settings']['sideNavBGColor'] = array('type' => 'color', 'default' => '#fff', 'label' => 'Sidenav Background color');

$config['stylesheet_compiler']['settings'][] = array('type' => 'delimiter');

$config['stylesheet_compiler']['settings'][] = array('type' => 'title', 'label' => 'Breadcumb colors');
$config['stylesheet_compiler']['settings']['breadcumbHyperlinkColor'] = array('type' => 'color', 'default' => '#230051', 'label' => 'Breadcumb Hyperlink Color');
$config['stylesheet_compiler']['settings']['breadcumbTextColor'] = array('type' => 'color', 'default' => '#230051', 'label' => 'Breadcumb Text Color');

$config['stylesheet_compiler']['settings'][] = array('type' => 'delimiter');
$config['template_settings'][] = array('type' => 'delimiter');

$config['stylesheet_compiler']['settings']['textDark'] = array('type' => 'color', 'default' => '#230051', 'label' => 'Text Dark');
$config['stylesheet_compiler']['settings']['textLight'] = array('type' => 'color', 'default' => '#fff', 'label' => 'Text Light');
$config['stylesheet_compiler']['settings']['dark'] = array('type' => 'color', 'default' => '#230051', 'label' => 'Dark color');
$config['stylesheet_compiler']['settings']['light'] = array('type' => 'color', 'default' => '#fff', 'label' => 'Light color');
$config['stylesheet_compiler']['settings']['silver'] = array('type' => 'color', 'default' => '#f3f3f3', 'label' => 'Silver');
$config['stylesheet_compiler']['settings']['grey'] = array('type' => 'color', 'default' => '#f3f3f3', 'label' => 'Grey');

$config['stylesheet_compiler']['settings'][] = array('type' => 'title', 'label' => 'Font Settings');

$config['stylesheet_compiler']['settings']['fontFamily'] = array('type' => 'font_selector', 'default' => 'lato', 'label' => 'Choose font for your site');
$config['stylesheet_compiler']['settings']['fontFamily']['options'] = array('nunito' => 'Nunito');

$config['stylesheet_compiler']['settings']['bodyFontSize'] = array('type' => 'text', 'default' => '14px', 'label' => 'Body Font Size');

//Stylesheet Settings / accept type="dropdown" and type="text" and type="title" and type="delimiter"
$config['template_settings'][] = array('type' => 'title', 'label' => 'Header Options');

$config['template_settings']['member_menu_icon'] = array('type' => 'dropdown', 'default' => 'member-menu-icon-show', 'label' => 'Show user menu icons');
$config['template_settings']['member_menu_icon']['options'] = array('member-menu-icon-show' => 'Yes', '' => 'No');

$config['template_settings']['sticky_header'] = array('type' => 'dropdown', 'default' => 'sticky-head', 'label' => 'Sticky Header');
$config['template_settings']['sticky_header'] = array('type' => 'dropdown', 'default' => '', 'label' => 'Sticky Header');
$config['template_settings']['sticky_header']['options'] = array('sticky-head' => 'Yes', '' => 'No');

// Sitcky footer
$config['template_settings']['footer_top_sticky'] = array('type' => 'dropdown', 'default' => '', 'label' => 'Footer top element sticky');
$config['template_settings']['footer_top_sticky']['options'] = array('footer-top-sticky' => 'Yes', '' => 'No');

$config['template_settings']['footer_copyright_sticky'] = array('type' => 'dropdown', 'default' => '', 'label' => 'Footer copyright sticky');
$config['template_settings']['footer_copyright_sticky']['options'] = array('footer-copyright-sticky' => 'Yes', '' => 'No');


$config['template_settings']['header_style'] = array('type' => 'dropdown', 'default' => 'header-inverse', 'label' => 'Header Style');
$config['template_settings']['header_style']['options'] = array('header-inverse' => 'Black');

$config['template_settings']['shopping_cart'] = array('type' => 'dropdown', 'default' => 'true', 'label' => 'Show shopping cart in header');
$config['template_settings']['shopping_cart']['options'] = array('true' => 'Yes', 'false' => 'No');

$config['template_settings']['profile_link'] = array('type' => 'dropdown', 'default' => 'true', 'label' => 'Show Profile link in header');
$config['template_settings']['profile_link']['options'] = array('true' => 'Yes', 'false' => 'No');

$config['template_settings']['search_bar'] = array('type' => 'dropdown', 'default' => 'true', 'label' => 'Show Search bar', 'help' => 'You can hide the search bar button from your website header');
$config['template_settings']['search_bar']['options'] = array('true' => 'Yes', 'false' => 'No');

//$config['template_settings']['preloader'] = array('type' => 'dropdown', 'default' => 'true', 'label' => 'Turn on preloader');
//$config['template_settings']['preloader']['options'] = array('true' => 'Yes', 'false' => 'No');

//$config['template_settings'][] = array('type' => 'delimiter');

//$config['template_settings'][] = array('type' => 'title', 'label' => 'Footer Options');

$config['template_settings']['footer'] = array('type' => 'dropdown', 'default' => 'true', 'label' => 'Turn on Footer for the website', 'help' => 'You can hide the footer from your website');
$config['template_settings']['footer']['options'] = array('true' => 'Yes', 'false' => 'No');

$config['stylesheet_compiler']['settings'][] = array('type' => 'delimiter');



//Layouts Padding Top & Bottom classes definiton
$config['layouts_css_classes'] = [];
$config['layouts_css_classes']['padding-top']['none'] = 'p-t-0';
$config['layouts_css_classes']['padding-top'][1] = 'p-t-10';
$config['layouts_css_classes']['padding-top'][2] = 'p-t-20';
$config['layouts_css_classes']['padding-top'][3] = 'p-t-30';
$config['layouts_css_classes']['padding-top'][4] = 'p-t-40';
$config['layouts_css_classes']['padding-top'][5] = 'p-t-50';
$config['layouts_css_classes']['padding-top'][6] = 'p-t-60';
$config['layouts_css_classes']['padding-top'][7] = 'p-t-70';
$config['layouts_css_classes']['padding-top'][8] = 'p-t-80';
$config['layouts_css_classes']['padding-top'][9] = 'p-t-90';
$config['layouts_css_classes']['padding-top'][10] = 'p-t-100';
$config['layouts_css_classes']['padding-top'][15] = 'p-t-150';
$config['layouts_css_classes']['padding-top'][20] = 'p-t-200';

$config['layouts_css_classes']['padding-bottom']['none'] = 'p-b-0';
$config['layouts_css_classes']['padding-bottom'][1] = 'p-b-10';
$config['layouts_css_classes']['padding-bottom'][2] = 'p-b-20';
$config['layouts_css_classes']['padding-bottom'][3] = 'p-b-30';
$config['layouts_css_classes']['padding-bottom'][4] = 'p-b-40';
$config['layouts_css_classes']['padding-bottom'][5] = 'p-b-50';
$config['layouts_css_classes']['padding-bottom'][6] = 'p-b-60';
$config['layouts_css_classes']['padding-bottom'][7] = 'p-b-70';
$config['layouts_css_classes']['padding-bottom'][8] = 'p-b-80';
$config['layouts_css_classes']['padding-bottom'][9] = 'p-b-90';
$config['layouts_css_classes']['padding-bottom'][10] = 'p-b-100';
$config['layouts_css_classes']['padding-bottom'][15] = 'p-b-150';
$config['layouts_css_classes']['padding-bottom'][20] = 'p-b-200';
