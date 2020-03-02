
<!-- jQuery first, then Tether, then Bootstrap JS. -->

<script src="<?= base_url('assets/'); ?>js/jquery-2.1.1.min.js" type="text/javascript"></script>

<script src="../cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> 

<script src="<?= base_url('assets/'); ?>vendor/bootstrap4beta/js/bootstrap.min.js" type="text/javascript"></script> 

<!--Cookie js for theme chooser and applying it --> 
<script src="<?= base_url('assets/'); ?>vendor/cookie/jquery.cookie.js"  type="text/javascript"></script> 

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug --> <script src="../js/ie10-viewport-bug-workaround.js"></script> <script>
            "use strict";
            $('input[type="checkbox"]').on('change', function(){
                $(this).parent().toggleClass("active")
                $(this).closest(".media").toggleClass("active");
            }); 
        $(window).on("load", function(){
            /* loading screen */
            $(".loader_wrapper").fadeOut("slow");
        });
        </script>
</body>

</html>