<html lang="en">

<head>
    <style>
        .dismissButton {
            background-color: #fff;
            border: 1px solid #dadce0;
            color: #1a73e8;
            border-radius: 4px;
            font-family: Roboto, sans-serif;
            font-size: 14px;
            height: 36px;
            cursor: pointer;
            padding: 0 24px
        }

        .dismissButton:hover {
            background-color: rgba(66, 133, 244, 0.04);
            border: 1px solid #d2e3fc
        }

        .dismissButton:focus {
            background-color: rgba(66, 133, 244, 0.12);
            border: 1px solid #d2e3fc;
            outline: 0
        }

        .dismissButton:hover:focus {
            background-color: rgba(66, 133, 244, 0.16);
            border: 1px solid #d2e2fd
        }

        .dismissButton:active {
            background-color: rgba(66, 133, 244, 0.16);
            border: 1px solid #d2e2fd;
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 1px 3px 1px rgba(60, 64, 67, 0.15)
        }

        .dismissButton:disabled {
            background-color: #fff;
            border: 1px solid #f1f3f4;
            color: #3c4043
        }
    </style>
    <style>
        .gm-style .gm-style-mtc label,
        .gm-style .gm-style-mtc div {
            font-weight: 400
        }
    </style>
    <style>
        .gm-control-active>img {
            box-sizing: content-box;
            display: none;
            left: 50%;
            pointer-events: none;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%)
        }

        .gm-control-active>img:nth-child(1) {
            display: block
        }

        .gm-control-active:hover>img:nth-child(1),
        .gm-control-active:active>img:nth-child(1) {
            display: none
        }

        .gm-control-active:hover>img:nth-child(2),
        .gm-control-active:active>img:nth-child(3) {
            display: block
        }
    </style>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans:400,500,700">
    <style>
        .gm-ui-hover-effect {
            opacity: .6
        }

        .gm-ui-hover-effect:hover {
            opacity: 1
        }
    </style>
    <style>
        .gm-style .gm-style-cc span,
        .gm-style .gm-style-cc a,
        .gm-style .gm-style-mtc div {
            font-size: 10px;
            box-sizing: border-box
        }
    </style>
    <style>
        @media print {

            .gm-style .gmnoprint,
            .gmnoprint {
                display: none
            }
        }

        @media screen {

            .gm-style .gmnoscreen,
            .gmnoscreen {
                display: none
            }
        }
    </style>
    <style>
        .gm-style-pbc {
            transition: opacity ease-in-out;
            background-color: rgba(0, 0, 0, 0.45);
            text-align: center
        }

        .gm-style-pbt {
            font-size: 22px;
            color: white;
            font-family: Roboto, Arial, sans-serif;
            position: relative;
            margin: 0;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }
    </style>
    <style>
        .gm-style img {
            max-width: none;
        }

        .gm-style {
            font: 400 11px Roboto, Arial, sans-serif;
            text-decoration: none;
        }
    </style>
    @extends('layouts.main')
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
			<script src="https://my.ronove.io/assets/hr/js/html5shiv.min.js"></script>
			<script src="https://my.ronove.io/assets/hr/js/respond.min.js"></script>
		<![endif]-->
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/9/common.js">
    </script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/9/util.js">
    </script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/9/map.js">
    </script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/9/overlay.js">
    </script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/9/onion.js">
    </script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/9/controls.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/9/marker.js">
    </script>
</head>

<body>

    
        <!-- Page Wrapper -->
        <div class="page-wrapper" style="min-height: 420px;">
            <link href="https://my.ronove.io/Subscribers/assets/css/xenon-components.css" rel="stylesheet">
            <!-- Page Content -->



            <div style="margin-left: -228px;">

                <div class="row">
                    <div class="col-md-12">
                        <style>
                            @media only screen and (max-width: 600px) and (orientation: portrait) {
                                #widget1 {
                                    display: none;
                                }

                                #widget2 {
                                    display: none;
                                }

                                #widget3 {
                                    display: none;
                                }

                                #widget4 {
                                    display: none;
                                }

                                #widget5 {
                                    display: none;
                                }

                                #widget6 {
                                    display: none;
                                }
                            }
                        </style>
                        <div id="map" style="height: 905px; width: 100%; position: relative; overflow: hidden;">
                            <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                    <div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">
                                        <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                    <div style="position: absolute; z-index: 997; transform: matrix(1, 0, 0, 1, -224, -222);">
                                                        <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 256px; top: 512px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 0px; top: 512px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: -256px; top: 512px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: -512px; top: 512px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 512px; top: 512px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: -768px; top: 512px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: -768px; top: 256px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: -768px; top: 0px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: -768px; top: -256px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 768px; top: -256px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 768px; top: 0px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 768px; top: 256px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 768px; top: 512px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;">
                                            </div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;">
                                            </div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                    <div style="position: absolute; z-index: 997; transform: matrix(1, 0, 0, 1, -224, -222);">
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 512px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 512px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 512px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 512px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 256px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 0px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: -256px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: -256px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 0px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 256px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 512px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -768px; top: 512px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -768px; top: 256px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -768px; top: 0px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -768px; top: -256px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 768px; top: -256px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 768px; top: 0px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 768px; top: 256px;">
                                                        </div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 768px; top: 512px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                <div style="position: absolute; z-index: 997; transform: matrix(1, 0, 0, 1, -224, -222);">
                                                    <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i3!3i3!4i256!2m3!1e0!2sm!3i530251876!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=98607" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i2!3i3!4i256!2m3!1e0!2sm!3i530251876!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=7279" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i2!3i2!4i256!2m3!1e0!2sm!3i530251876!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=37507" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i3!3i2!4i256!2m3!1e0!2sm!3i530251876!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=128835" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i4!3i2!4i256!2m3!1e0!2sm!3i530251888!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=28804" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i4!3i3!4i256!2m3!1e0!2sm!3i530251888!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=129647" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: 256px; top: 512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i4!3i4!4i256!2m3!1e0!2sm!3i530251888!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=99419" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: 0px; top: 512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i3!3i4!4i256!2m3!1e0!2sm!3i530251876!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=68379" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: -256px; top: 512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i2!3i4!4i256!2m3!1e0!2sm!3i530251876!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=108122" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: -512px; top: 512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i1!3i4!4i256!2m3!1e0!2sm!3i530251876!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=16794" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i1!3i3!4i256!2m3!1e0!2sm!3i530251876!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=47022" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i1!3i2!4i256!2m3!1e0!2sm!3i530251876!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=77250" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i1!3i1!4i256!2m3!1e0!2sm!3i530251876!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=107478" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i2!3i1!4i256!2m3!1e0!2sm!3i530251876!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=67735" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i3!3i1!4i256!2m3!1e0!2sm!3i530251876!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=27992" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i4!3i1!4i256!2m3!1e0!2sm!3i530251876!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=119320" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i5!3i1!4i256!2m3!1e0!2sm!3i530251876!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=79577" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i5!3i2!4i256!2m3!1e0!2sm!3i530251888!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=120132" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i5!3i3!4i256!2m3!1e0!2sm!3i530251888!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=89904" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: 512px; top: 512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i5!3i4!4i256!2m3!1e0!2sm!3i530251888!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=59676" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: -768px; top: 512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i0!3i4!4i256!2m3!1e0!2sm!3i530251876!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=56537" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: -768px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i0!3i3!4i256!2m3!1e0!2sm!3i530251876!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=86765" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: -768px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i0!3i2!4i256!2m3!1e0!2sm!3i530251876!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=116993" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: -768px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i0!3i1!4i256!2m3!1e0!2sm!3i530251876!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=16150" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: 768px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i6!3i1!4i256!2m3!1e0!2sm!3i530251876!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=39834" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: 768px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i6!3i2!4i256!2m3!1e0!2sm!3i530251888!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=80389" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: 768px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i6!3i3!4i256!2m3!1e0!2sm!3i530251888!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=50161" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: 768px; top: 512px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i6!3i4!4i256!2m3!1e0!2sm!3i530251888!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;token=19933" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0; transition-duration: 0.8s;">
                                            <p class="gm-style-pbt">Use ctrl + scroll to zoom the map</p>
                                        </div>
                                        <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                            <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;">
                                                </div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;">
                                                </div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                                </div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div><iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div><button draggable="false" title="Toggle fullscreen view" aria-label="Toggle fullscreen view" type="button" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div>
                                        <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="0" controlheight="0" style="margin: 10px; user-select: none; position: absolute; display: none; bottom: 26px; left: 0px;">
                                            <div class="gmnoprint" controlwidth="40" controlheight="40" style="display: none; position: absolute;">
                                                <div style="width: 40px; height: 40px;"><button draggable="false" title="Rotate map 90 degrees" aria-label="Rotate map 90 degrees" type="button" class="gm-control-active" style="background: none rgb(255, 255, 255); display: none; border: 0px; margin: 0px 0px 32px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button><button draggable="false" title="Tilt map" aria-label="Tilt map" type="button" class="gm-tilt gm-control-active" style="background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;"></button></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="40" controlheight="81" style="margin: 10px; user-select: none; position: absolute; bottom: 95px; right: 40px;">
                                            <div class="gmnoprint" controlwidth="40" controlheight="81" style="position: absolute; left: 0px; top: 0px;">
                                                <div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;">
                                                    <button draggable="false" title="Zoom in" aria-label="Zoom in" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23666%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23333%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23111%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button>
                                                    <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;">
                                                    </div><button draggable="false" title="Zoom out" aria-label="Zoom out" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                            <a target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=45.294718,-5.649607&amp;z=3&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Open this area in Google Maps (opens a new window)" style="position: static; overflow: visible; float: none; display: inline;">
                                                <div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div></div>
                                    <div>
                                        <div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 71px; bottom: 0px; width: 150px;">
                                            <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;">
                                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                    <div style="width: 1px;"></div>
                                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                                    </div>
                                                </div>
                                                <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                    <a style="text-decoration: none; cursor: pointer; display: none;">Map
                                                        Data</a><span>Map data ©2020 Google, INEGI</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                <div style="width: 1px;"></div>
                                                <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                                </div>
                                            </div>
                                            <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                <a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms
                                                    of Use</a>
                                            </div>
                                        </div>
                                        <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;">
                                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                <div style="width: 1px;"></div>
                                                <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                                </div>
                                            </div>
                                            <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                <a target="_blank" rel="noopener" title="Report errors in the road map or imagery to Google" dir="ltr" href="https://www.google.com/maps/@45.2947184,-5.6496074,3z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report
                                                    a map error</a>
                                            </div>
                                        </div>
                                        <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                                            <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">
                                                Map data ©2020 Google, INEGI</div>
                                        </div>
                                    </div>
                                    <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 501px; top: 363px;">
                                        <div style="padding: 0px 0px 10px; font-size: 16px; box-sizing: border-box;">Map
                                            Data</div>
                                        <div style="font-size: 13px;">Map data ©2020 Google, INEGI</div><button draggable="false" title="Close" aria-label="Close" type="button" class="gm-ui-hover-effect" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="widget1">
                            <div class="col-sm-1 pull-left" style="z-index: 99; position: absolute; top:80px; left:280px;">

                                <div class="xe-widget xe-counter xe-counter-red" id="employee_count" data-count=".num" data-from="1" data-to="74" data-suffix="" data-duration="3" data-easing="false" style="width: 234px;">
                                    <div class="xe-icon">
                                        <a href="{{ url('employee') }}"><i class="fa fa-user-md"></i></a>
                                    </div>
                                    <div class="xe-label">
                                        <strong class="num" id="total_employees">74</strong>
                                        <span style="font-family: CircularStd, sans-serif; color: black; font-weight: 800;">Employees</span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-1 pull-right" style="z-index: 99; position: absolute; top:80px; right:150px;">

                                <div class="xe-widget xe-counter xe-counter-red" id="application_count" data-count=".num" data-from="1" data-to="22" data-suffix="" data-duration="3" data-easing="false" style="width: 234px;">
                                    <div class="xe-icon">
                                        <a href="https://my.ronove.io/Subscribers/HrJobApplicants"><i class="fa fa-files-o"></i></a>
                                    </div>
                                    <div class="xe-label">
                                        <strong class="num" id="total_applications">22</strong>
                                        <span style="font-family: CircularStd, sans-serif; color: black; font-weight: 800;">Job
                                            Applications</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row" id="widget2">
                            <div class="col-sm-1 pull-left" style="z-index: 99; position: absolute; top:240px; left:280px;">

                                <div class="xe-widget xe-counter xe-counter-orange" id="carehome_count" data-count=".num" data-from="1" data-to="18" data-suffix="" data-duration="3" data-easing="false" style="width: 234px;">
                                    <div class="xe-icon">
                                        <a href="{{ url('client') }}"><i class="fa fa-heartbeat"></i></a>
                                    </div>
                                    <div class="xe-label">
                                        <strong class="num" id="total_carehomes">18</strong>
                                        <span style="font-family: CircularStd, sans-serif; color: black; font-weight: 800;">Clients</span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-1 pull-right" style="z-index: 99; position: absolute; top:240px; right:150px;">

                                <div class="xe-widget xe-counter xe-counter-pink" data-count=".num" data-suffix="k" data-duration="3" data-easing="false" style="width: 234px;">
                                    <div class="xe-icon">
                                        <a href="https://my.ronove.io/Subscribers/HrDashboard"><i class="fa fa-dashboard"></i></a>
                                        <!--<a href="https://my.ronove.io/Subscribers/UniversalHR"><i class="fa fa-dashboard"></i></a>-->
                                    </div>
                                    <div class="xe-label">
                                        <!--<strong class="num">&nbsp;</strong>-->
                                        <span style="color: black; font-weight: 800;">Human Resources</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row" id="widget3">
                            <div class="col-sm-1 pull-left" style="z-index: 99; position: absolute; top:400px; left:280px;">

                                <div class="xe-widget xe-counter xe-counter-red" id="serviceuser_count" data-count=".num" data-from="1" data-to="8" data-suffix="" data-duration="3" data-easing="false" style="width: 234px;">
                                    <div class="xe-icon">
                                        <a href="{{ url('service-user') }}"><i class="fa fa-user"></i></a>
                                    </div>
                                    <div class="xe-label">
                                        <strong class="num" id="total_serviceusers">8</strong>
                                        <span style="font-family: CircularStd, sans-serif; color: black; font-weight: 800;">Service
                                            Users</span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-1 pull-right" style="z-index: 99; position: absolute; top:400px; right:150px;">

                                <div class="xe-widget xe-counter xe-counter-green" data-count=".num" data-from="1" data-to="0" data-suffix="k" data-duration="3" data-easing="false" style="width: 234px;">
                                    <div class="xe-icon">
                                        <a href="https://my.ronove.io/Subscribers/HrPayroll"><i class="fa fa-money"></i></a>
                                    </div>
                                    <div class="xe-label">
                                        <!--<strong class="num">&nbsp;</strong>-->
                                        <span style="font-family: CircularStd, sans-serif; color: black; font-weight: 800;">Payroll</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row" id="widget4">
                            <div class="col-sm-1 pull-left" style="z-index: 99; position: absolute; top:560px; left:280px;">

                                <div class="xe-widget xe-counter xe-counter-red" id="serviceuser_count" data-count=".num" data-from="1" data-to="8" data-suffix="" data-duration="3" data-easing="false" style="width: 234px;">
                                    <div class="xe-icon">
                                        <a href="https://my.ronove.io/Subscribers/HrCalendar"><i class="fa fa-calendar"></i></a>
                                    </div>
                                    <div class="xe-label">
                                        <!--<strong class="num" id="total_serviceusers">8</strong>-->
                                        <span style="font-family: CircularStd, sans-serif; color: black; font-weight: 800;">Schedule</span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-1 pull-right" style="z-index: 99; position: absolute; top:560px; right:150px;">

                                <div class="xe-widget xe-counter xe-counter-green" data-count=".num" data-from="1" data-to="0" data-suffix="k" data-duration="3" data-easing="false" style="width: 234px;">
                                    <div class="xe-icon">
                                        <a href="https://my.ronove.io/Subscribers/HrPerformanceIndicator"><i class="fa fa-graduation-cap"></i></a>
                                    </div>
                                    <div class="xe-label">
                                        <!--<strong class="num">&nbsp;</strong>-->
                                        <span style="font-family: CircularStd, sans-serif; color: black; font-weight: 800;">Performance
                                            Indicator</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row" id="widget4">
                            <div class="col-sm-1 pull-left" style="z-index: 99; position: absolute; top:720px; left:280px;">

                                <div class="xe-widget xe-counter xe-counter-red" id="serviceuser_count" data-count=".num" data-from="1" data-to="8" data-suffix="" data-duration="3" data-easing="false" style="width: 234px;">
                                    <div class="xe-icon">
                                        <a href="https://my.ronove.io/Subscribers/Settings"><i class="fa fa-cog"></i></a>
                                    </div>
                                    <div class="xe-label">
                                        <!--<strong class="num" id="total_serviceusers">8</strong>-->
                                        <span style="font-family: CircularStd, sans-serif; color: black; font-weight: 800;">Settings</span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-1 pull-right" style="z-index: 99; position: absolute; top:720px; right:150px;">

                                <div class="xe-widget xe-counter xe-counter-green" data-count=".num" data-from="1" data-to="0" data-suffix="k" data-duration="3" data-easing="false" style="width: 234px;">
                                    <div class="xe-icon">
                                        <a href="https://my.ronove.io/Subscribers/HrInvoices"><i class="fa fa-money"></i></a>
                                    </div>
                                    <div class="xe-label">
                                        <!--<strong class="num">&nbsp;</strong>-->
                                        <span style="font-family: CircularStd, sans-serif; color: black; font-weight: 800;">Accounts</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <script>
                            var map;

                            function initMap() {
                                map = new google.maps.Map(document.getElementById('map'), {
                                    center: {
                                        lat: 45.29471844323809,
                                        lng: -5.6496074417522551
                                    },
                                    zoom: 3
                                });

                                var oms = new OverlappingMarkerSpiderfier(map, {
                                    markersWontMove: true, // we promise not to move any markers, allowing optimizations
                                    markersWontHide: true, // we promise not to change visibility of any markers, allowing optimizations
                                    basicFormatEvents: true // allow the library to skip calculating advanced formatting information
                                });



                                //var carehome_marker = "https://www.my.ronove.io/Subscribers/assets/img/marker3.png";
                                //var staff_marker = "https://www.my.ronove.io/super-admin/assets/img/staff_marker.png";
                                //var serviceuser_marker = "https://www.my.ronove.io/super-admin/assets/img/serviceuser_marker.png";


                                var carehome_marker = "";

                                carehome_marker = "https://my.ronove.io/Subscribers/assets/img/house_avatar.png";

                                var icon = {
                                    url: carehome_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var carehome_postcode = "CV12 0NF";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var carehome_company = "CowLees";
                                    var carehome_phone = "";
                                    var carehome_pcode = "CV12 0NF";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + carehome_company + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + carehome_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Carehome Name: ' + carehome_company + ', Postcode: ' +
                                            carehome_pcode,
                                        icon: icon
                                    });


                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });

                                var carehome_marker = "";

                                carehome_marker = "https://my.ronove.io/Subscribers/assets/img/house_avatar.png";

                                var icon = {
                                    url: carehome_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var carehome_postcode = "LE2 3NA";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var carehome_company = "ClaudetteLowe";
                                    var carehome_phone = "";
                                    var carehome_pcode = "LE2 3NA";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + carehome_company + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + carehome_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Carehome Name: ' + carehome_company + ', Postcode: ' +
                                            carehome_pcode,
                                        icon: icon
                                    });


                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });

                                var carehome_marker = "";

                                carehome_marker = "https://my.ronove.io/Subscribers/assets/img/house_avatar.png";

                                var icon = {
                                    url: carehome_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var carehome_postcode = "LE4 1HA";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var carehome_company = "George Hythe House";
                                    var carehome_phone = "01162350944";
                                    var carehome_pcode = "LE4 1HA";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + carehome_company + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + carehome_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Carehome Name: ' + carehome_company + ', Postcode: ' +
                                            carehome_pcode,
                                        icon: icon
                                    });


                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });

                                var carehome_marker = "";

                                carehome_marker = "https://my.ronove.io/Subscribers/assets/img/house_avatar.png";

                                var icon = {
                                    url: carehome_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var carehome_postcode = "LE7 9PH";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var carehome_company = "The Lodge";
                                    var carehome_phone = "01162419333";
                                    var carehome_pcode = "LE7 9PH";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + carehome_company + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + carehome_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Carehome Name: ' + carehome_company + ', Postcode: ' +
                                            carehome_pcode,
                                        icon: icon
                                    });


                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });

                                var carehome_marker = "";

                                carehome_marker = "https://my.ronove.io/Subscribers/assets/img/house_avatar.png";

                                var icon = {
                                    url: carehome_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var carehome_postcode = "LE1 3AL";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var carehome_company = "Total Solutions";
                                    var carehome_phone = "";
                                    var carehome_pcode = "LE1 3AL";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + carehome_company + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + carehome_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Carehome Name: ' + carehome_company + ', Postcode: ' +
                                            carehome_pcode,
                                        icon: icon
                                    });


                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });

                                var carehome_marker = "";

                                carehome_marker = "https://my.ronove.io/Subscribers/assets/img/house_avatar.png";

                                var icon = {
                                    url: carehome_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var carehome_postcode = "LE2 1RH";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var carehome_company = "Heath Field House";
                                    var carehome_phone = "0162745490";
                                    var carehome_pcode = "LE2 1RH";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + carehome_company + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + carehome_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Carehome Name: ' + carehome_company + ', Postcode: ' +
                                            carehome_pcode,
                                        icon: icon
                                    });


                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });

                                var carehome_marker = "";

                                carehome_marker = "https://my.ronove.io/Subscribers/assets/img/house_avatar.png";

                                var icon = {
                                    url: carehome_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var carehome_postcode = "LE3 8DX";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var carehome_company = "Glenfield Storage Solutions";
                                    var carehome_phone = "";
                                    var carehome_pcode = "LE3 8DX";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + carehome_company + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + carehome_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Carehome Name: ' + carehome_company + ', Postcode: ' +
                                            carehome_pcode,
                                        icon: icon
                                    });


                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });

                                var carehome_marker = "";

                                carehome_marker = "https://my.ronove.io/Subscribers/assets/img/house_avatar.png";

                                var icon = {
                                    url: carehome_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var carehome_postcode = "LE11 4EX";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var carehome_company = "The Cube";
                                    var carehome_phone = "01509264755";
                                    var carehome_pcode = "LE11 4EX";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + carehome_company + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + carehome_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Carehome Name: ' + carehome_company + ', Postcode: ' +
                                            carehome_pcode,
                                        icon: icon
                                    });


                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });

                                var carehome_marker = "";

                                carehome_marker = "https://my.ronove.io/Subscribers/assets/img/house_avatar.png";

                                var icon = {
                                    url: carehome_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var carehome_postcode = "LE2 6DJ";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var carehome_company = "The Hub PPNL SPV B83-1";
                                    var carehome_phone = "01509264755";
                                    var carehome_pcode = "LE2 6DJ";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + carehome_company + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + carehome_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Carehome Name: ' + carehome_company + ', Postcode: ' +
                                            carehome_pcode,
                                        icon: icon
                                    });


                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });

                                var carehome_marker = "";

                                carehome_marker = "https://my.ronove.io/Subscribers/assets/img/house_avatar.png";

                                var icon = {
                                    url: carehome_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var carehome_postcode = "LE19 1DX";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var carehome_company = "Taylor Wimpey";
                                    var carehome_phone = "";
                                    var carehome_pcode = "LE19 1DX";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + carehome_company + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + carehome_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Carehome Name: ' + carehome_company + ', Postcode: ' +
                                            carehome_pcode,
                                        icon: icon
                                    });


                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });

                                var carehome_marker = "";

                                carehome_marker = "https://my.ronove.io/Subscribers/assets/img/house_avatar.png";

                                var icon = {
                                    url: carehome_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var carehome_postcode = "LE18 1AB";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var carehome_company = "Nightingale's Nursing Home";
                                    var carehome_phone = "0116 288 3443";
                                    var carehome_pcode = "LE18 1AB";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + carehome_company + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + carehome_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Carehome Name: ' + carehome_company + ', Postcode: ' +
                                            carehome_pcode,
                                        icon: icon
                                    });


                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });

                                var carehome_marker = "";

                                carehome_marker = "https://my.ronove.io/Subscribers/assets/img/house_avatar.png";

                                var icon = {
                                    url: carehome_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var carehome_postcode = "LE18 1AB";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var carehome_company = "Nightingale's Nursing Home";
                                    var carehome_phone = "0116 2883443";
                                    var carehome_pcode = "LE18 1AB";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + carehome_company + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + carehome_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Carehome Name: ' + carehome_company + ', Postcode: ' +
                                            carehome_pcode,
                                        icon: icon
                                    });


                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });

                                var carehome_marker = "";

                                carehome_marker = "https://my.ronove.io/Subscribers/assets/img/house_avatar.png";

                                var icon = {
                                    url: carehome_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var carehome_postcode = "LE1 3AL";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var carehome_company = "UK INSTANT SERVICES LTD";
                                    var carehome_phone = "07456679666";
                                    var carehome_pcode = "LE1 3AL";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + carehome_company + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + carehome_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Carehome Name: ' + carehome_company + ', Postcode: ' +
                                            carehome_pcode,
                                        icon: icon
                                    });


                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });

                                var carehome_marker = "";

                                carehome_marker = "https://my.ronove.io/Subscribers/assets/img/house_avatar.png";

                                var icon = {
                                    url: carehome_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var carehome_postcode = "LE4 9LJ";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var carehome_company = "HICARE LIMITED";
                                    var carehome_phone = "";
                                    var carehome_pcode = "LE4 9LJ";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + carehome_company + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + carehome_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Carehome Name: ' + carehome_company + ', Postcode: ' +
                                            carehome_pcode,
                                        icon: icon
                                    });


                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });

                                var carehome_marker = "";

                                carehome_marker = "https://my.ronove.io/Subscribers/assets/img/house_avatar.png";

                                var icon = {
                                    url: carehome_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var carehome_postcode = "L7 7DN";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var carehome_company = "Downing Property Services Limited";
                                    var carehome_phone = "07786965519";
                                    var carehome_pcode = "L7 7DN";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + carehome_company + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + carehome_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Carehome Name: ' + carehome_company + ', Postcode: ' +
                                            carehome_pcode,
                                        icon: icon
                                    });


                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });

                                var carehome_marker = "";

                                carehome_marker = "https://my.ronove.io/Subscribers/assets/img/house_avatar.png";

                                var icon = {
                                    url: carehome_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var carehome_postcode = "LE1 1RE";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var carehome_company = "LCB Depot";
                                    var carehome_phone = "07854147616 ";
                                    var carehome_pcode = "LE1 1RE";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + carehome_company + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + carehome_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Carehome Name: ' + carehome_company + ', Postcode: ' +
                                            carehome_pcode,
                                        icon: icon
                                    });


                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });

                                var carehome_marker = "";

                                carehome_marker = "https://my.ronove.io/Subscribers/assets/img/house_avatar.png";

                                var icon = {
                                    url: carehome_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var carehome_postcode = "LE1 4PG";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + carehome_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var carehome_company = "Tandem";
                                    var carehome_phone = "07970800119/0116 478";
                                    var carehome_pcode = "LE1 4PG";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + carehome_company + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + carehome_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Carehome Name: ' + carehome_company + ', Postcode: ' +
                                            carehome_pcode,
                                        icon: icon
                                    });


                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE4 1DY";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Ms";
                                    var staff_name = "Susan" + " " + " Ajonumah";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "+447576324173";
                                    var staff_pcode = "LE4 1DY";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/ServiceStaff/profile-pic/ID_Picture5.jpg";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE2 7GP";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Mrs";
                                    var staff_name = "Catherine" + " " + "Ablong";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "07852904855";
                                    var staff_pcode = "LE2 7GP";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/ServiceStaff/profile-pic/ann_photo.jpg";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE11 2LN";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Mrs";
                                    var staff_name = "ANN" + " " + " BAILEY";
                                    var staff_designation = "Housekeeper";
                                    var staff_phone = "07785932114";
                                    var staff_pcode = "LE11 2LN";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LN2 5LS";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "";
                                    var staff_name = "Aloysius" + " " + "Bin";
                                    var staff_designation = "";
                                    var staff_phone = "07424122916";
                                    var staff_pcode = "LN2 5LS";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/ServiceStaff/profile-pic/nature2.jpg";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE1 3AL";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Mr";
                                    var staff_name = "Isaac Arthur" + " " + "Eduah";
                                    var staff_designation = "Field Worker";
                                    var staff_phone = "07424122916";
                                    var staff_pcode = "LE1 3AL";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/ServiceStaff/profile-pic/fred.jpg";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE3 6NP";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Mr";
                                    var staff_name = "Ferdinand" + " " + "   Elad";
                                    var staff_designation = "Nurse";
                                    var staff_phone = "07988867388";
                                    var staff_pcode = "LE3 6NP";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE1 3AL";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "";
                                    var staff_name = "Eric" + " " + "Fosse";
                                    var staff_designation = "";
                                    var staff_phone = "07801795972";
                                    var staff_pcode = "LE1 3AL";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "CV2 4PZ";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Ms";
                                    var staff_name = "Suzzane" + " " + " Kamaogne";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "07853969375";
                                    var staff_pcode = "CV2 4PZ";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/ServiceStaff/profile-pic/Picture1.png";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "CV2 3JA";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Ms";
                                    var staff_name = "Doris" + " " + "  Kien";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "07449249443";
                                    var staff_pcode = "CV2 3JA";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE1 3AL";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Ms";
                                    var staff_name = "Elizabeth" + " " + " Marque";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "07846644238";
                                    var staff_pcode = "LE1 3AL";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE4 2BA";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Mr";
                                    var staff_name = "Cyprian" + " " + " Mayi";
                                    var staff_designation = "Field Worker";
                                    var staff_phone = "07927760459";
                                    var staff_pcode = "LE4 2BA";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "B37 6JE";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "";
                                    var staff_name = "Zelda" + " " + "Mdachi";
                                    var staff_designation = "";
                                    var staff_phone = "07789884319";
                                    var staff_pcode = "B37 6JE";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE2 9AR";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Ms";
                                    var staff_name = "Adel" + " " + " Nanje";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "07881652436";
                                    var staff_pcode = "LE2 9AR";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/ServiceStaff/profile-pic/PHOTO.JPG";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE5 2QJ";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Mr";
                                    var staff_name = "Zamile" + " " + " Ngwenya";
                                    var staff_designation = "Healthcare Support Worker";
                                    var staff_phone = "07397549417";
                                    var staff_pcode = "LE5 2QJ";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/ServiceStaff/profile-pic/010.jpg";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE3 9QA";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Mr";
                                    var staff_name = "Beckly Sone" + " " + "Njume";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "07380316504";
                                    var staff_pcode = "LE3 9QA";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE4 0PE";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Ms";
                                    var staff_name = "Betty" + " " + "Omoruyi";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "07487733987";
                                    var staff_pcode = "LE4 0PE";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE3 5JF";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Ms";
                                    var staff_name = "Faith" + " " + " Onya";
                                    var staff_designation = "Field Worker";
                                    var staff_phone = "07438103237";
                                    var staff_pcode = "LE3 5JF";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE3 5FA";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Ms";
                                    var staff_name = "Rubby" + " " + " Owusu";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "07514156785";
                                    var staff_pcode = "LE3 5FA";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";
                                staff_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE4 0QZ";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Mr";
                                    var staff_name = "Jean Bernard" + " " + " Pataly";
                                    var staff_designation = "Field Worker";
                                    var staff_phone = "07424122916";
                                    var staff_pcode = "LE4 0QZ";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/ServiceStaff/profile-pic/Lilian_Pedro.jpg";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE3 9EY";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Mrs";
                                    var staff_name = "Lilian" + " " + " Pedro";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "07467038094";
                                    var staff_pcode = "LE3 9EY";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/ServiceStaff/profile-pic/PHOTO.jpg";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE2 6RD";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Ms";
                                    var staff_name = "Millicent" + " " + " Rupprath";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "07946409795";
                                    var staff_pcode = "LE2 6RD";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";




                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE5 1TB";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "";
                                    var staff_name = "Salimatu" + " " + "Sesay";
                                    var staff_designation = "";
                                    var staff_phone = "07999114180";
                                    var staff_pcode = "LE5 1TB";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/ServiceStaff/profile-pic/20200715_114014.jpg";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE42DL";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Mrs";
                                    var staff_name = "Sylvia Nkansah" + " " + "Amponsa";
                                    var staff_designation = "Nurse";
                                    var staff_phone = "07459010350";
                                    var staff_pcode = "LE42DL";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/ServiceStaff/profile-pic/20200715_113937.jpg";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE2 1XR";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Ms";
                                    var staff_name = "Jane" + " " + "Mumbi";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "07491135638";
                                    var staff_pcode = "LE2 1XR";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/ServiceStaff/profile-pic/20200718_183909.jpg";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE30JL";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Ms";
                                    var staff_name = "Larrisa " + " " + "Nkea";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "07440684554";
                                    var staff_pcode = "LE30JL";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/ServiceStaff/profile-pic/20200813_125156.jpg";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE12LP";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Mr";
                                    var staff_name = "Kasim" + " " + "Ibrahim";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "07305572519";
                                    var staff_pcode = "LE12LP";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";



                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE3 6FT";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Mr";
                                    var staff_name = "Chisom Dike" + " " + "Nmekaraonye";
                                    var staff_designation = "Housekeeper";
                                    var staff_phone = "07340533040";
                                    var staff_pcode = "LE3 6FT";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/ServiceStaff/profile-pic/20200812_134051.jpg";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE3 5HS";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Ms";
                                    var staff_name = "Loveth" + " " + "Osuala";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "07405666277";
                                    var staff_pcode = "LE3 5HS";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/ServiceStaff/profile-pic/20200903_141317.jpg";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE4OJF";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Mr";
                                    var staff_name = "Nnokoson" + " " + "Boyvi";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "0747542219";
                                    var staff_pcode = "LE4OJF";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";



                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE4 0QY";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Mr";
                                    var staff_name = "Stephane Blaise" + " " + "Wanda";
                                    var staff_designation = "Housekeeper";
                                    var staff_phone = "07477624994";
                                    var staff_pcode = "LE4 0QY";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/ServiceStaff/profile-pic/20200723_101810.jpg";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE53TJ";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Ms";
                                    var staff_name = "Erzsebet" + " " + "Orsos";
                                    var staff_designation = "Housekeeper";
                                    var staff_phone = "07754790008";
                                    var staff_pcode = "LE53TJ";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";



                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "L38BY";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Ms";
                                    var staff_name = "Udoma" + " " + "Maria";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "079401088577";
                                    var staff_pcode = "L38BY";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";



                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE25SB";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "";
                                    var staff_name = "Emmanuel" + " " + "Tabe Eyong";
                                    var staff_designation = "";
                                    var staff_phone = "07457426873";
                                    var staff_pcode = "LE25SB";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";



                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE9 1SX";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "";
                                    var staff_name = "Amal" + " " + "Ryland";
                                    var staff_designation = "";
                                    var staff_phone = "07561025193";
                                    var staff_pcode = "LE9 1SX";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";




                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE3 2FR";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "";
                                    var staff_name = "Amen" + " " + "Merit Oviahon";
                                    var staff_designation = "";
                                    var staff_phone = "07401794778";
                                    var staff_pcode = "LE3 2FR";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";



                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE5 5GP";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "";
                                    var staff_name = "Anumedem" + " " + "Fotajoah Ramson";
                                    var staff_designation = "";
                                    var staff_phone = "07883947304";
                                    var staff_pcode = "LE5 5GP";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";




                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE4 0FA";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Mr";
                                    var staff_name = "Etule" + " " + "Martin Edoe";
                                    var staff_designation = "Healthcare Support Worker";
                                    var staff_phone = "07947369848";
                                    var staff_pcode = "LE4 0FA";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE3 5HS";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Ms";
                                    var staff_name = "Nnenna Cynitha" + " " + "Ogbonna";
                                    var staff_designation = "Healthcare Support Worker";
                                    var staff_phone = "07404450218";
                                    var staff_pcode = "LE3 5HS";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE30EA";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Ms";
                                    var staff_name = "Roseline" + " " + "Ezekel";
                                    var staff_designation = "Healthcare Support Worker";
                                    var staff_phone = "07404693015";
                                    var staff_pcode = "LE30EA";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";



                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE1 2GB";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Miss";
                                    var staff_name = "Sahra" + " " + "Ibrahim";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "07985534308";
                                    var staff_pcode = "LE1 2GB";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";



                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE3 5HS";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Mr";
                                    var staff_name = "Tony" + " " + "Godwin";
                                    var staff_designation = "Housekeeper";
                                    var staff_phone = "07459324057";
                                    var staff_pcode = "LE3 5HS";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";



                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE3 0EA";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Miss";
                                    var staff_name = "Faith" + " " + "Agbonghile";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "07448842661";
                                    var staff_pcode = "LE3 0EA";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE2 1FH";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Mr";
                                    var staff_name = "Hamuda" + " " + "Anfoune";
                                    var staff_designation = "Field Worker";
                                    var staff_phone = "07440684554343434";
                                    var staff_pcode = "LE2 1FH";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/ServiceStaff/profile-pic/20200723_154033.jpg";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE2 1FJ";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Mrs";
                                    var staff_name = "Humira" + " " + "Patel";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "07459889060";
                                    var staff_pcode = "LE2 1FJ";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/ServiceStaff/profile-pic/0.jpg";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE4 0LT";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Mrs";
                                    var staff_name = "Rita" + " " + "Anyaegbu";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "07404125957";
                                    var staff_pcode = "LE4 0LT";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE1 3AL";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Dr";
                                    var staff_name = "KOHO" + " " + "OSCAR";
                                    var staff_designation = "Locum";
                                    var staff_phone = "07456679666";
                                    var staff_pcode = "LE1 3AL";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";



                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE1 3AL";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "";
                                    var staff_name = "Hamuda" + " " + "Service";
                                    var staff_designation = "";
                                    var staff_phone = "07440684554";
                                    var staff_pcode = "LE1 3AL";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE3 0QG";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "";
                                    var staff_name = "Ovoke" + " " + "Ejemewuo";
                                    var staff_designation = "";
                                    var staff_phone = "07946291418";
                                    var staff_pcode = "LE3 0QG";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "CV25GW";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Mr";
                                    var staff_name = "ROBERT" + " " + "NJUHNGONG";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "07966792875";
                                    var staff_pcode = "CV25GW";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE3 9PU";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Mr";
                                    var staff_name = "ABRA" + " " + "MOGLO";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "07879061307";
                                    var staff_pcode = "LE3 9PU";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE1 3AL";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "";
                                    var staff_name = "Hamuda" + " " + "Mobile And Email";
                                    var staff_designation = "";
                                    var staff_phone = "07915393920";
                                    var staff_pcode = "LE1 3AL";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";



                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE1 3kl";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "";
                                    var staff_name = "Hamuda" + " " + "Female";
                                    var staff_designation = "";
                                    var staff_phone = "09715393920";
                                    var staff_pcode = "LE1 3kl";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/ServiceStaff/profile-pic/20200804_100513.jpg";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE4 0BN";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Ms";
                                    var staff_name = "COMFORT" + " " + "NSOCKA";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "07424662700";
                                    var staff_pcode = "LE4 0BN";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/ServiceStaff/profile-pic/20200805_1123582.jpg";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE4 2GH";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Mr";
                                    var staff_name = "MOSES" + " " + "NGUTE";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "07459275934";
                                    var staff_pcode = "LE4 2GH";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE42GH";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "";
                                    var staff_name = "Daniel" + " " + "Sona";
                                    var staff_designation = "";
                                    var staff_phone = "07388589347";
                                    var staff_pcode = "LE42GH";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                staff_marker = "https://my.ronove.io/ServiceStaff/profile-pic/20200810_114551.jpg";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "NG7 5GN";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "Ms";
                                    var staff_name = "SONIA" + " " + "AZECHIO DJOUMESSI";
                                    var staff_designation = "Healthcare Assistant";
                                    var staff_phone = "07495530946";
                                    var staff_pcode = "NG7 5GN";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";



                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE30L";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "";
                                    var staff_name = "WALAZELA" + " " + "NKENGFACK";
                                    var staff_designation = "";
                                    var staff_phone = "07459390557";
                                    var staff_pcode = "LE30L";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";



                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE30BG";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "";
                                    var staff_name = "MADEMBO" + " " + "ALEXANDER";
                                    var staff_designation = "";
                                    var staff_phone = "07401600963";
                                    var staff_pcode = "LE30BG";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "LE30TL";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "";
                                    var staff_name = "AMSTRONG AMIN" + " " + "AYUK";
                                    var staff_designation = "";
                                    var staff_phone = "0749166421";
                                    var staff_pcode = "LE30TL";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "DE142NG";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "";
                                    var staff_name = "RANSOME KOME" + " " + "NGALAME";
                                    var staff_designation = "";
                                    var staff_phone = "07904201082";
                                    var staff_pcode = "DE142NG";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";


                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "WV146NP";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "";
                                    var staff_name = "MBATUH" + " " + "MELIEN QUEEN";
                                    var staff_designation = "";
                                    var staff_phone = "07889404559";
                                    var staff_pcode = "WV146NP";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";



                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "WV2 1AW";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "";
                                    var staff_name = "RAVEENA" + " " + "RATTU";
                                    var staff_designation = "";
                                    var staff_phone = "0736727461";
                                    var staff_pcode = "WV2 1AW";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });

                                var staff_marker = "";

                                var icon2 = {
                                    url: staff_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var staff_postcode = "le2 6ue";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode +
                                    "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + staff_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {
                                    var staff_salutation = "";
                                    var staff_name = "Zainab" + " " + "Abdulkunle";
                                    var staff_designation = "";
                                    var staff_phone = "07404726219";
                                    var staff_pcode = "le2 6ue";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + staff_salutation + ' ' +
                                        staff_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p>' + staff_designation + '</p>' +
                                        '<p>' + result.results[0].formatted_address + '</p>' +
                                        '<p>' + staff_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: '\n' + staff_salutation + ' ' + staff_name + '\n' +
                                            staff_designation + '\n' + staff_postcode,
                                        icon: icon2
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });

                                    /*setInterval(function () {
                                        position = new google.maps.LatLng(),
                                        marker.setPosition(position);
                                    }, 1000);*/

                                    oms.addMarker(marker);
                                });



                                var serviceuser_marker = "";

                                serviceuser_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";

                                var icon3 = {
                                    url: serviceuser_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var serviceuser_postcode = "LE2 3NA";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" +
                                    serviceuser_postcode + "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + serviceuser_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var serviceuser_name = "Claudette" + " " + "Lowe";
                                    var serviceuser_phone = "";
                                    var serviceuser_pcode = "LE2 3NA";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + serviceuser_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + serviceuser_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Service User Name: ' + serviceuser_name + ', Postcode: ' +
                                            serviceuser_pcode,
                                        icon: icon3
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });

                                var serviceuser_marker = "";

                                serviceuser_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";

                                var icon3 = {
                                    url: serviceuser_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var serviceuser_postcode = "LE65 2GS";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" +
                                    serviceuser_postcode + "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + serviceuser_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var serviceuser_name = "Grace" + " " + "Farren";
                                    var serviceuser_phone = "";
                                    var serviceuser_pcode = "LE65 2GS";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + serviceuser_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + serviceuser_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Service User Name: ' + serviceuser_name + ', Postcode: ' +
                                            serviceuser_pcode,
                                        icon: icon3
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });

                                var serviceuser_marker = "";

                                serviceuser_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";

                                var icon3 = {
                                    url: serviceuser_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var serviceuser_postcode = "LE12 7FR";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" +
                                    serviceuser_postcode + "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + serviceuser_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var serviceuser_name = "Pam" + " " + "Haezeindt";
                                    var serviceuser_phone = "";
                                    var serviceuser_pcode = "LE12 7FR";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + serviceuser_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + serviceuser_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Service User Name: ' + serviceuser_name + ', Postcode: ' +
                                            serviceuser_pcode,
                                        icon: icon3
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });

                                var serviceuser_marker = "";

                                serviceuser_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";

                                var icon3 = {
                                    url: serviceuser_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var serviceuser_postcode = "LE12 7FR";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" +
                                    serviceuser_postcode + "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + serviceuser_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var serviceuser_name = "Pamela" + " " + "Haezeindt";
                                    var serviceuser_phone = "";
                                    var serviceuser_pcode = "LE12 7FR";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + serviceuser_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + serviceuser_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Service User Name: ' + serviceuser_name + ', Postcode: ' +
                                            serviceuser_pcode,
                                        icon: icon3
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });

                                var serviceuser_marker = "";

                                serviceuser_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";

                                var icon3 = {
                                    url: serviceuser_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var serviceuser_postcode = "LE12 8DD";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" +
                                    serviceuser_postcode + "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + serviceuser_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var serviceuser_name = "Christina" + " " + "Morris";
                                    var serviceuser_phone = "";
                                    var serviceuser_pcode = "LE12 8DD";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + serviceuser_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + serviceuser_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Service User Name: ' + serviceuser_name + ', Postcode: ' +
                                            serviceuser_pcode,
                                        icon: icon3
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });

                                var serviceuser_marker = "";

                                serviceuser_marker = "https://my.ronove.io/Subscribers/assets/img/female_avatar.png";

                                var icon3 = {
                                    url: serviceuser_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var serviceuser_postcode = "LE65 2UP";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" +
                                    serviceuser_postcode + "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + serviceuser_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var serviceuser_name = "Edith" + " " + "Page";
                                    var serviceuser_phone = "";
                                    var serviceuser_pcode = "LE65 2UP";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + serviceuser_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + serviceuser_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Service User Name: ' + serviceuser_name + ', Postcode: ' +
                                            serviceuser_pcode,
                                        icon: icon3
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });

                                var serviceuser_marker = "";

                                serviceuser_marker = "https://my.ronove.io/Subscribers/assets/img/unknown_avatar.png";

                                var icon3 = {
                                    url: serviceuser_marker, // url
                                    scaledSize: new google.maps.Size(30, 30), // scaled size
                                    origin: new google.maps.Point(0, 0), // origin
                                    anchor: new google.maps.Point(0, 0) // anchor
                                };

                                var serviceuser_postcode = "LE1 3HT";

                                var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" +
                                    serviceuser_postcode + "&key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw";
                                //var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + serviceuser_postcode + "&key=AIzaSyDj3s5I4Ljle7eN5Nlw_KpYEOWVw7Jt-dI";

                                $.getJSON(url, function(result) {

                                    var serviceuser_name = "Amir" + " " + "Sabra";
                                    var serviceuser_phone = "";
                                    var serviceuser_pcode = "LE1 3HT";

                                    var contentString = '<div id="content">' +
                                        '<div id="siteNotice">' +
                                        '</div>' +
                                        '<h1 id="firstHeading" class="firstHeading">' + serviceuser_name + '</h1>' +
                                        '<div id="bodyContent">' +
                                        '<p><b>Address: </b> ' + result.results[0].formatted_address + '</p>' +
                                        '<p><b>Phone: </b> ' + serviceuser_phone + '</p>' +
                                        '</div>' +
                                        '</div>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    var marker = new google.maps.Marker({
                                        position: result.results[0].geometry.location,
                                        map: map,
                                        title: 'Service User Name: ' + serviceuser_name + ', Postcode: ' +
                                            serviceuser_pcode,
                                        icon: icon3
                                    });

                                    marker.addListener('click', function() {
                                        map.setZoom(10);
                                        map.setCenter(marker.getPosition());
                                        infowindow.open(map, marker);
                                    });
                                    oms.addMarker(marker);
                                });
                            }
                        </script>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPGEdolrtHP7-5F0-EeJA-2C1mHwwminw&amp;callback=initMap" async="" defer=""></script>
                        <script src="https://my.ronove.io/Subscribers/assets/js/oms.min.js"></script>
                    </div>
                </div>
            </div>
            <!-- /Page Content -->
        </div>
        <!-- /Page Wrapper -->

    <!-- Bootstrap Core JS -->
    <script src="https://my.ronove.io/assets/hr/js/popper.min.js"></script>
    <script src="https://my.ronove.io/assets/hr/js/bootstrap.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="https://my.ronove.io/assets/hr/js/jquery.slimscroll.min.js"></script>

    <!-- Select2 JS -->
    <script src="https://my.ronove.io/assets/hr/js/select2.min.js"></script>

    <!-- Datetimepicker JS -->
    <script src="https://my.ronove.io/assets/hr/js/moment.min.js"></script>
    <script src="https://my.ronove.io/assets/hr/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">

    <!-- Datatable JS -->
    <script src="https://my.ronove.io/assets/hr/js/jquery.dataTables.min.js"></script>
    <script src="https://my.ronove.io/assets/hr/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>

    <!-- Calendar JS -->
    <!--<script src="https://my.ronove.io/assets/hr/js/jquery-ui.min.js"></script>
        <script src="https://my.ronove.io/assets/hr/js/fullcalendar.min.js"></script>
        <script src="https://my.ronove.io/assets/hr/js/jquery.fullcalendar.js"></script>-->

    <script src="https://my.ronove.io/assets/hr/plugins/fullcalendar/core/main.js"></script>
    <script src="https://my.ronove.io/assets/hr/plugins/fullcalendar/interaction/main.js"></script>
    <script src="https://my.ronove.io/assets/hr/plugins/fullcalendar/daygrid/main.js"></script>
    <script src="https://my.ronove.io/assets/hr/plugins/fullcalendar/list/main.js"></script>
    <script src="https://my.ronove.io/assets/hr/plugins/fullcalendar/google-calendar/main.js"></script>


    <!-- Dropfiles JS -->
    <script src="https://my.ronove.io/assets/hr/js/dropfiles.js"></script>

    <!-- Chart JS -->
    <script src="https://my.ronove.io/assets/hr/plugins/morris/morris.min.js"></script>
    <script src="https://my.ronove.io/assets/hr/plugins/raphael/raphael.min.js"></script>
    <script src="https://my.ronove.io/assets/hr/js/chart.js"></script>

    <!-- Multiselect JS -->
    <script src="https://my.ronove.io/assets/hr/js/multiselect.min.js"></script>

    <!-- Summernote JS -->
    <script src="https://my.ronove.io/assets/hr/plugins/summernote/dist/summernote-bs4.min.js"></script>

    <!-- Custom JS -->
    <script src="https://my.ronove.io/assets/hr/js/app.js"></script>

    <!--<script src="https://my.ronove.io/assets/hr/js/server.js"></script>
		
		<script src="https://my.ronove.io/assets/hr/js/client.js"></script>-->

    <script>
        $("#clear_notifications").click(function(e) {
            e.preventDefault();
            $.ajax({
                url: 'notifications/clear_notifications',
                type: 'GET',
                error: function() {
                    alert('An Error Has Occurred, Please Try Again Later!');
                },
                success: function(data) {
                    $(".not-list").empty();
                    $("#notification_count").text(data);
                }
            });
        });

        $("#clear_messages").click(function(e) {
            e.preventDefault();
            $.ajax({
                url: 'notifications/clear_messages',
                type: 'GET',
                error: function() {
                    alert('An Error Has Occurred, Please Try Again Later!');
                },
                success: function(data) {
                    $(".message-list").empty();
                    $("#message_count").text(data);
                }
            });
        });

    </script>


    <div class="sidebar-overlay"></div>
</body>

</html>