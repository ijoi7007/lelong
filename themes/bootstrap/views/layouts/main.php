<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <meta property="fb:app_id" content="391130844335445" />
        <meta property="fb:admins" content="{gohartanah.apps}"/>

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <?php Yii::app()->bootstrap->register(); ?>

    </head>

    <body>

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=391130844335445";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <?php
        $this->widget('bootstrap.widgets.TbNavbar', array(
            'items' => array(
                array(
                    'class' => 'bootstrap.widgets.TbMenu',
                    'items' => array(
                        array('label' => 'Home', 'url' => array('/site/index')),
                        array('label' => 'Owner & Purchaser', 'url' => '#', 'items' => array(
                                '---',
                                array('label' => 'For Owner'),
                                array('label' => 'Check Value Form', 'url' => array('valuation/create')),
                                array('label' => 'For Sale Form', 'url' => array('forsale/create')),
                                array('label' => 'Agent Fee Calculator', 'url' => array('kalkulator/agentfee')),
                                '---',
                                array('label' => 'For Purchaser'),
                                array('label' => 'Waiting List Form', 'url' => array('/waitinglist/create')),
                        )),
                        array('label' => 'Extra Services', 'url' => '#', 'items' => array(
                                array('label' => 'Refinancing Service', 'url' => array('/refinance/create')),
                                array('label' => 'Solicitor Service', 'url' => array('/solicitorForm/create')),
                                array('label' => 'Apply Loan Form', 'url' => array('/loan/create')),
                                array('label' => 'Takaful Pinjaman BPP', 'url' => '#'),
                                array('label' => 'Takaful MLTT Form', 'url' => '#'),
                                '---',
                                array('label' => 'Others'),
                                array('label' => 'Property Negotiator Form', 'url' => array('/negotiator/create')),
                        )),
                        array('label' => 'Calculator', 'url' => '#', 'items' => array(
                                '---',
                                array('label' => 'Financing'),
                                array('label' => 'Debt Service Ratio (DSR)', 'url' => array('/kalkulator/dsr')),
                                array('label' => 'Loan Repayment', 'url' => array('/kalkulator/repayment')),
                                array('label' => 'Loan Qualification', 'url' => array('/kalkulator/qualification')),
                                array('label' => 'Total Loan Based on Monthly Repayment', 'url' => '#'),
                                array('label' => 'Over Price Calculator', 'url' => '#'),
                                '---',
                                array('label' => 'Stamp Duty & Tax'),
                                array('label' => 'Memorendum of Tranfer (MOT)', 'url' => array('/kalkulator/mot')),
                                array('label' => 'Tenancy Agreement', 'url' => array('/kalkulator/tenancy')),
                                array('label' => 'Real Property Gain Tax (RPGT)', 'url' => '#'),
                                '---',
                                array('label' => 'Solicitor'),
                                array('label' => 'Legal Fee', 'url' => array('/kalkulator/legalfee')),
                                '---',
                                array('label' => 'etc'),
                                array('label' => 'EPF Withdraw', 'url' => '#'),
                        )),

                        array('label' => 'Admin', 'url' => '#', 'items' => array(
                                '---',
                                array('label' => 'Solicitor', 'url' => array('/solicitorForm/create')),
                                array('label' => 'Refinance', 'url' => array('/refinance/admin')),
                                array('label' => 'Value', 'url' => array('valuation/admin')),
                                array('label' => 'Forsale', 'url' => array('forsale/admin')),
                                array('label' => 'WaitingList', 'url' => array('/waitinglist/admin')),
                                array('label' => 'Negotiator', 'url' => array('/negotiator/admin')),
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
                Copyright &copy; <?php echo date('Y'); ?> by Gohartanah Apps (GAPPS)<br/>
                All Rights Reserved.<br/>
                <?php echo "Powered by <a href='http://www.gohartanah.com' target='_blank'>gohartanah.com</a>" ?>
            </div><!-- footer -->

        </div><!-- page -->
    </body>
</html>
