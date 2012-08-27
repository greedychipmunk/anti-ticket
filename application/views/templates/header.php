<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title><?php echo $title; ?></title>
        <?php
            $link = array(
                          'href' => 'css/style.css',
                          'rel' => 'stylesheet',
                          'type' => 'text/css'
                          );
            
            echo link_tag( $link );
        ?>
    </head>
<body>
<div id="wrapper">
    <div id="content">
        <div id="header">
            <div id="logo">
                <h1><?php echo $company_name; ?></h1>
                <h4><?php echo $company_tagline; ?></h4>
            </div>
            <div id="links">
                <ul>
                    <li>
                        <?php 
                            echo anchor(
                                        'home', 
                                        'Home', 
                                        array(
                                              'title' => 'Home',
                                              'company_name' => 'Kava',
                                              'page_tagline' => 'we love the homeless. parking tickets, not so much.',
                                              'company_tagline' => 'help the homeless. hurt park atlanta.'
                                        )
                            ); 
                        ?>
                    </li>
                    <li>
                        <?php 
                            echo anchor(
                                        'aboutus', 
                                        'About Us', 
                                        array(
                                              'title' => 'About Us',
                                              'company_name' => 'Kava',
                                              'page_tagline' => 'we love the homeless. parking tickets, not so much.',
                                              'company_tagline' => 'help the homeless. hurt park atlanta.'
                                        )
                            ); 
                        ?>
                    </li>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
        </div>
        <div id="mainimg">
            <h3><?php echo $title; ?></h3>
            <h4><?php echo $page_tagline; ?></h4>
        </div>