    <?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <?php Yii::app()->bootstrap->register(); ?>

    </head>

    <body>

        <?php
        $this->widget('bootstrap.widgets.TbNavbar', array(
            'items' => array(
                array(
                    'class' => 'bootstrap.widgets.TbMenu',
                    'items' => array(
                        array('label' => 'Home', 'url' => array('/lelong/index')),
                        array('label' => 'Register Auction', 'url' => array('/register/create')),
                        array('label' => 'Ready Bidder', 'url' => array('#')),
                       
                        array('label' => 'Calculator', 'url' => '#', 'items' => array(
                                '---',
                                array('label' => 'Financing'),
                                array('label' => 'Debt Service Ratio (DSR)', 'url' => array('/kalkulator/dsr')),
                                array('label' => 'Loan Repayment', 'url' => array('/kalkulator/repayment')),
                                '---',
                                array('label' => 'Memorendum of Tranfer (MOT)', 'url' => array('/kalkulator/mot')),
                                '---',
                                array('label' => 'Solicitor'),
                                array('label' => 'Legal Fee', 'url' => array('/kalkulator/legalfee')),
                        )),

                        array('label' => 'Contact', 'url' => array('/site/contact')),
                        array('label' => 'Login', 'url' => array('site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                ),
            ),
        ));
        ?>

        <div class="container" id="page">

            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <div class="clear"></div>
            <br/>    
            <div id="footer" class="well">
                Copyright &copy; <?php echo date('Y'); ?> by Otai Lelong Apps<br/>
                All Rights Reserved.<br/>
                <?php echo "Powered by <a href='http://www.otailelong.com' target='_blank'>otailelong.com</a>" ?>
            </div><!-- footer -->

        </div><!-- page -->
    </body>
</html>
