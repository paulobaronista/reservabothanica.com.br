<script src="assets/js/lightbox-plus-jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/js//wow.js"></script>

<script>
    wow = new WOW({
        animateClass: 'animated',
        offset: 100,
        callback: function(box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
    });
    wow.init();
</script>

<?php
echo script_tag('assets/js/slick.js');
echo script_tag('assets/js/jquery.clearinput.js');
echo script_tag('assets/js/jFuncoes.js');
echo script_tag('assets/js/bootstrap.min.js');
?>

</body>
</html>