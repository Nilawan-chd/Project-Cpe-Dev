<footer class="entry-footer">
</footer><!-- .entry-footer -->
</article><!-- #post-## -->


</main><!-- #main -->
</div><!-- #primary -->

</div>
</div>
</div><!-- #content -->

<?php
$this->load->model('Contact_model');
$contact = $this->Contact_model->get_contact_by_id(1);

?>
<div id="sidebar-footer" class="footer-widgets widget-area" style="background: #4e3275" role="complementary">
    <div class="container">
        <div class="sidebar-column col-md-4">
            <aside id="sow-editor-2" class="widget widget_sow-editor">
                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                    <div class="siteorigin-widget-tinymce textwidget">
                        <p><?php echo $contact->department;?><br/>
                            <?php echo $contact->address;?><br/>
                            <?php echo $contact->tel;?></p>
                    </div>
                </div>
            </aside>
        </div>


    </div>
</div>
<a class="go-top"><i class="fa fa-angle-up"></i></a>

<footer id="colophon"  style="background: #422C62" class="site-footer" role="contentinfo">
    <div class="site-info container">
        <span>Copyright © 2020 <?php echo $contact->department;?><?php echo $contact->university;?> All Rights Reserved.</span>
    </div><!-- .site-info -->
</footer><!-- #colophon -->


</div><!-- #page -->

<!-- Custom Facebook Feed JS -->
<script type="text/javascript">
    var cfflinkhashtags = "true";
</script>
<style type="text/css">.so-widget-sow-social-media-buttons-flat-5302a12fe70b .social-media-button-container {
        zoom: 1;
        text-align: left;
        /*
          &:after {
              content:"";
              display:inline-block;
              width:100%;
          }
          */
    }

    .so-widget-sow-social-media-buttons-flat-5302a12fe70b .social-media-button-container:before {
        content: '';
        display: block;
    }

    .so-widget-sow-social-media-buttons-flat-5302a12fe70b .social-media-button-container:after {
        content: '';
        display: table;
        clear: both;
    }

    @media (max-width: 780px) {
        .so-widget-sow-social-media-buttons-flat-5302a12fe70b .social-media-button-container {
            text-align: left;
        }
    }

    .so-widget-sow-social-media-buttons-flat-5302a12fe70b .sow-social-media-button-facebook-0 {
        color: #ffffff !important;
        background-color: #3a5795;
        border: 1px solid #3a5795;
    }

    .so-widget-sow-social-media-buttons-flat-5302a12fe70b .sow-social-media-button-facebook-0:visited,
    .so-widget-sow-social-media-buttons-flat-5302a12fe70b .sow-social-media-button-facebook-0:active,
    .so-widget-sow-social-media-buttons-flat-5302a12fe70b .sow-social-media-button-facebook-0:hover {
        color: #ffffff !important;
    }

    .so-widget-sow-social-media-buttons-flat-5302a12fe70b .sow-social-media-button-facebook-0.ow-button-hover:hover {
        color: #ffffff;
    }

    .so-widget-sow-social-media-buttons-flat-5302a12fe70b .sow-social-media-button-facebook-0.ow-button-hover:hover {
        background: #4060a4;
        border-bottom-color: #4060a4;
    }

    .so-widget-sow-social-media-buttons-flat-5302a12fe70b .sow-social-media-button-youtube-0 {
        color: #ffffff !important;
        background-color: #cf3427;
        border: 1px solid #cf3427;
    }

    .so-widget-sow-social-media-buttons-flat-5302a12fe70b .sow-social-media-button-youtube-0:visited,
    .so-widget-sow-social-media-buttons-flat-5302a12fe70b .sow-social-media-button-youtube-0:active,
    .so-widget-sow-social-media-buttons-flat-5302a12fe70b .sow-social-media-button-youtube-0:hover {
        color: #ffffff !important;
    }

    .so-widget-sow-social-media-buttons-flat-5302a12fe70b .sow-social-media-button-youtube-0.ow-button-hover:hover {
        color: #ffffff;
    }

    .so-widget-sow-social-media-buttons-flat-5302a12fe70b .sow-social-media-button-youtube-0.ow-button-hover:hover {
        background: #d83f32;
        border-bottom-color: #d83f32;
    }

    .so-widget-sow-social-media-buttons-flat-5302a12fe70b .sow-social-media-button {
        display: inline-block;
        font-size: 1em;
        line-height: 1em;
        margin: 0.1em 0.1em 0.1em 0;
        padding: 0.5em 0;
        width: 2em;
        text-align: center;
        vertical-align: middle;
        -webkit-border-radius: 1.5em;
        -moz-border-radius: 1.5em;
        border-radius: 1.5em;
    }

    .so-widget-sow-social-media-buttons-flat-5302a12fe70b .sow-social-media-button .sow-icon-fontawesome {
        display: inline-block;
        height: 1em;
    }</style>
<style type="text/css" media="all"
       id="siteorigin-panels-layouts-footer">/* Layout w5b73a67a53fcb */
    #pgc-w5b73a67a53fcb-0-0, #pgc-w5b73a67a53fcb-0-1 {
        width: 50%;
        width: calc(50% - (0.5 * 30px))
    }

    #pl-w5b73a67a53fcb #panel-w5b73a67a53fcb-0-0-0, #pl-w5b73a67a53fcb #panel-w5b73a67a53fcb-0-1-0 {
    }

    #pl-w5b73a67a53fcb .so-panel, #pl-w5b73a67a53fcb .so-panel:last-child {
        margin-bottom: 0px
    }

    #pg-w5b73a67a53fcb-0 > .panel-row-style {
        padding: 0px
    }

    #pg-w5b73a67a53fcb-0.panel-no-style, #pg-w5b73a67a53fcb-0.panel-has-style > .panel-row-style {
        -webkit-align-items: flex-start;
        align-items: flex-start
    }

    #panel-w5b73a67a53fcb-0-0-0 > .panel-widget-style, #panel-w5b73a67a53fcb-0-1-0 > .panel-widget-style {
        padding: 0px 0px 0px 0px
    }

    @media (max-width: 780px) {
        #pg-w5b73a67a53fcb-0.panel-no-style, #pg-w5b73a67a53fcb-0.panel-has-style > .panel-row-style {
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        #pg-w5b73a67a53fcb-0 > .panel-grid-cell, #pg-w5b73a67a53fcb-0 > .panel-row-style > .panel-grid-cell {
            width: 100%;
            margin-right: 0
        }

        #pgc-w5b73a67a53fcb-0-0, #pl-w5b73a67a53fcb .panel-grid .panel-grid-cell-mobile-last {
            margin-bottom: 0px
        }

        #pl-w5b73a67a53fcb .panel-grid-cell {
            padding: 0
        }

        #pl-w5b73a67a53fcb .panel-grid .panel-grid-cell-empty {
            display: none
        }
    } </style>
<link rel='stylesheet' id='siteorigin-panels-front-css'
      href='http://eng.rmutp.ac.th/web2558/wp-content/plugins/siteorigin-panels/css/front-flex.min.css?ver=2.10.14'
      type='text/css' media='all'/>
<link rel='stylesheet' id='siteorigin-widget-icon-font-fontawesome-css'
      href='http://eng.rmutp.ac.th/web2558/wp-content/plugins/so-widgets-bundle/icons/fontawesome/style.css?ver=0250fee3743c609c22cfcc3d4abc24b8'
      type='text/css' media='all'/>
<link rel='stylesheet' id='su-shortcodes-css'
      href='http://eng.rmutp.ac.th/web2558/wp-content/plugins/shortcodes-ultimate/includes/css/shortcodes.css?ver=5.7.0'
      type='text/css' media='all'/>
<script type='text/javascript'>
    /* <![CDATA[ */
    var scriptParams = {"google_search_engine_id": "003879595481138030606:_ewufq_9wwi"};
    /* ]]> */
</script>
<script type='text/javascript'
        src='http://eng.rmutp.ac.th/web2558/wp-content/plugins/wp-google-search/assets/js/google_cse_v2.js?ver=1'></script>
<script type='text/javascript'
        src='http://eng.rmutp.ac.th/web2558/wp-content/plugins/custom-facebook-feed/js/cff-scripts.js?ver=2.12.3'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var lsow_settings = {"mobile_width": "780", "custom_css": ""};
    /* ]]> */
</script>
<script type='text/javascript'
        src='http://eng.rmutp.ac.th/web2558/wp-content/plugins/livemesh-siteorigin-widgets/assets/js/lsow-frontend.min.js?ver=2.5.9'></script>
<script type='text/javascript'
        src='http://eng.rmutp.ac.th/web2558/wp-content/themes/sydney/js/scripts.js?ver=0250fee3743c609c22cfcc3d4abc24b8'></script>
<script type='text/javascript'
        src='http://eng.rmutp.ac.th/web2558/wp-content/themes/sydney/js/main.js?ver=20180508'></script>
<script type='text/javascript'
        src='http://eng.rmutp.ac.th/web2558/wp-content/themes/sydney/js/skip-link-focus-fix.js?ver=20130115'></script>
<script type='text/javascript'
        src='http://eng.rmutp.ac.th/web2558/wp-includes/js/hoverIntent.min.js?ver=1.8.1'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var megamenu = {"timeout": "300", "interval": "100"};
    /* ]]> */
</script>
<script type='text/javascript'
        src='http://eng.rmutp.ac.th/web2558/wp-content/plugins/megamenu/js/maxmegamenu.js?ver=2.7.4'></script>
<script type='text/javascript'
        src='http://eng.rmutp.ac.th/web2558/wp-includes/js/wp-embed.min.js?ver=0250fee3743c609c22cfcc3d4abc24b8'></script>
<script type='text/javascript'
        src='http://eng.rmutp.ac.th/web2558/wp-includes/js/imagesloaded.min.js?ver=3.2.0'></script>
<script type='text/javascript'
        src='http://eng.rmutp.ac.th/web2558/wp-includes/js/masonry.min.js?ver=3.3.2'></script>
<script type='text/javascript'
        src='http://eng.rmutp.ac.th/web2558/wp-content/themes/sydney/js/masonry-init.js?ver=0250fee3743c609c22cfcc3d4abc24b8'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var SUShortcodesL10n = {
        "noPreview": "This shortcode doesn't work in live preview. Please insert it into editor and preview on the site.",
        "magnificPopup": {
            "close": "Close (Esc)",
            "loading": "Loading...",
            "prev": "Previous (Left arrow key)",
            "next": "Next (Right arrow key)",
            "counter": "%curr% of %total%",
            "error": "Failed to load content.. <a href=\"0rl target=\"_blank\"><u>\/u><\/a>"
        }
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='http://eng.rmutp.ac.th/web2558/wp-content/plugins/shortcodes-ultimate/includes/js/shortcodes/index.js?ver=5.7.0'></script>

<!-- Shortcodes Ultimate custom CSS - start -->
<style type="text/css">
    .su-tabs > .su-tabs-panes > div {

        /* Text size */
        font-size: 20px;

    }
</style>
<!-- Shortcodes Ultimate custom CSS - end -->

</body>
</html>

