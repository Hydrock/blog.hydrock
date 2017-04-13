<?php
	// <meta charset="utf-8">
	Theme::charset('utf-8');

	// <meta name="viewport" content="width=device-width, initial-scale=1">
	Theme::viewport('width=device-width, initial-scale=1');

	// <title>...</title>
	Theme::title();

	// <meta name="description" content=".....">
	Theme::description();

	// <link rel="shortcut icon" href="favicon.png">
	Theme::favicon('favicon.png');

	// CSS files
	Theme::css('style.css');
	Theme::css('bludit.css');
	Theme::css('animate.css');
?>

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Google Webfont
-->
<link href='//fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,500' rel='stylesheet' type='text/css'>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter40578655 = new Ya.Metrika({
                    id:40578655,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/40578655" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Load plugins
- Hook: Site head
-->
<?php Theme::plugins('siteHead') ?>



