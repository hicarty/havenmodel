<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BasicMVC | Lightweight PHP MVC framework</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400&display=swap" rel="stylesheet">
    <style>
        * {
            -webkit-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }
        html, body {
            margin: 0;
            padding: 0;
            font-family: 'Lato', sans-serif;
        }
        main {
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            align-items: center;
            justify-content: center;
            height: 100vh;
            min-width: 100vw;
            font-size: 1.4em;
            text-align: center;
        }
        #logo h1 {
            font-weight: 400;
            margin-bottom: 0px;
            text-decoration: underline;
        }
        #logo p {
            margin-top: 0.5em;
            font-weight: 300;
        }
        #links ul {
            list-style: none;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        #links ul li {
            margin: 10px 20px;
        }
        #links ul li a {
            color: #000;
            text-decoration: none;
        }
        #links ul li a:hover {
            color: #5E35B1;
        }
    </style>
</head>
<body>
    <main>
        <div id="logo">
            <h1>BasicMVC</h1>
            <p>A lightweight PHP MVC framework.</p>
        </div>
        <div id="vb_page" class="/*background_cover:*/ background_cover_no /*font_size:*/ font_size_1 /*left_margin:*/ left_margin_no /*logo_retina:*/ logo_retina_yes /*logo_visibility:*/ logo_visibility_yes /*menu_font_size:*/ menu_font_size_3 /*menu_position:*/ menu_position_left /*page_align:*/ page_align_yes /*page_fixed_header:*/ page_fixed_header_yes /*page_full_width:*/ page_full_width_no /*page_scaling:*/ page_scaling_yes /*page_scaling_top:*/ page_scaling_top_yes /*text_full_width:*/ text_full_width_no /*theme:*/ theme_viewbook_pro /*thumbnails_hide_name:*/ thumbnails_hide_name_no /*thumbnails_size:*/ thumbnails_size_small /*title_font_size:*/ title_font_size_7 /*title_visibility:*/ title_visibility_no /*top_margin:*/ top_margin_yes logo content_type_scrolling_gallery"  data-env="production">

            <div class='header'>
                <div class="page_ratio">
                    <!-- TITLE -->
                    <div id="vb_title">
                        <h1>CHARLES MOONEY PHOTOGRAPHY</h1>
                    </div>

                    @await Html.PartialAsync("_Navigation")
                    </div>
                </div>
                <!-- body_text -->
                <div class="main_content">
                    <div class="vb_album_container"></div>
                </div>

                <div class="footer">
                    <!-- FOOTER -->
                    <div class="push">&nbsp;</div>

                    <div id="vb_footer" class="">
                        <span class='vb_footer_text'></span>
                    </div>
                </div>
            </div>

        </div>
    </main>
</body>
</html>