<style type="Text/CSS">
    body {
        background-image: url("./images/background/image-5.jpg");
    }
</style>

<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <script type="text/javascript">
        window.onload = function () {
            var images = ['Images/background/image-2.jpg', 'Images/background/image-3.jpg', 'Images/background/image-6.jpg', 'Images/background/image-7.jpg', ];
            var image = images[Math.floor(Math.random() * images.length)];
            document.getElementsByTagName('body')[0].style.backgroundImage = "url('" + image + "')";
            document.getElementsByTagName('body')[0].style.backgroundRepeat = "no-repeat";
            document.getElementsByTagName('body')[0].style.backgroundSize = "cover";
        }
    </script>
</head>
<body>
</body>
</html>