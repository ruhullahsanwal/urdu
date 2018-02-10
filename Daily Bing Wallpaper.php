<?php
        function display_daily_bing_wallpaper() {
            $bing_daily_image_xml = file_get_contents('http://www.bing.com/HPImageArchive.aspx?format=xml&idx=0&n=1&mkt=en-US');
            preg_match("/<urlBase>(.+?)<\/urlBase>/ies", $bing_daily_image_xml, $matches);
            $bing_daily_img_url= 'https://www.bing.com' . $matches[1] . '_1920x1080.jpg';
            return $bing_daily_img_url;
            //echo "<img src='". $bing_daily_img_url. "'>";
        }
        //display_daily_bing_wallpaper();
        $wallpaperURL = display_daily_bing_wallpaper();
?>



<!DOCTYPE HTML>
<html>
    <head>
        <style>
            body {
                background: url('<?php echo $wallpaperURL; ?>') no-repeat center center fixed;
                background-size: auto auto;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                -webkit-transition: background 1s ease-in-out;
                -moz-transition: background 1s ease-in-out;
                -o-transition: background 1s ease-in-out;
                -ms-transition: background 1s ease-in-out;
                transition: background 1s ease-in-out;
                -webkit-backface-visibility: hidden;
            }
            .shader_left {
                position: absolute;
                top: 0;
                left: 0;
                width: 1200px;
                height: 300px;
                background: linear-gradient(350deg,rgba(0,0,0,0) 0%,rgba(0,0,0,0) 59%,rgba(0,0,0,.64) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#7d000000',endColorstr='#00000000',GradientType=1);
                opacity: .5;
            }
            .shader_right {
                position: absolute;
                top: 0;
                right: 0;
                width: 800px;
                height: 300px;
                background: linear-gradient(15deg,rgba(0,0,0,0) 0%,rgba(0,0,0,0) 59%,rgba(0,0,0,.64) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000',endColorstr='#7d000000',GradientType=1);
                opacity: .5;
            }
            .bottom_shader {
                background: -moz-linear-gradient(top,rgba(0,0,0,0) 0%,rgba(0,0,0,.6) 100%);
                background: -webkit-linear-gradient(top,rgba(0,0,0,0) 0%,rgba(0,0,0,.6) 100%);
                background: linear-gradient(to bottom,rgba(0,0,0,0) 0%,rgba(0,0,0,.6) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000',endColorstr='#99000000',GradientType=0);
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 366px;
            }
        </style>
    </head>
    <body>
        <div class="shader_left" data-bm="10"></div>
        <div class="shader_right" data-bm="11"></div>
        <div class="bottom_shader" data-bm="13"></div>
    </body>
</html>
