<!-- ngg_resource_manager_marker -->
<?php
$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
$count = fread($myfile,filesize("newfile.txt"));
$count+=1;
fclose($myfile);
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");

fwrite($myfile, $count);

fclose($myfile);
?>

<div id="copyright">
                <p>Copyright &copy; 2018 Institute of Marine Technology, Munshiganj.</p>
                <p>Hit Count: <?php echo $count;?></p>
            </div>
        </div>

<p><?php echo  $_SERVER['REMOTE_ADDR'];?></p>
<script type='text/javascript' src='<?php echo base_url()?>wp-content/themes/dpi/js/bootstrap.min6594.js?ver=c221bb7164c41f8876b0fed1e7615d3b'></script>
        <script type='text/javascript' src='<?php echo base_url()?>wp-content/themes/dpi/js/jquery.slicknav6594.js?ver=c221bb7164c41f8876b0fed1e7615d3b'></script>
        <script type='text/javascript' src='<?php echo base_url()?>wp-content/themes/dpi/js/jquery.flexslider-min6594.js?ver=c221bb7164c41f8876b0fed1e7615d3b'></script>
        <script type='text/javascript' src='<?php echo base_url()?>wp-includes/js/wp-embed.min6594.js?ver=c221bb7164c41f8876b0fed1e7615d3b'></script>

        <script type="text/javascript">
            jQuery(window).load(function(){
            jQuery('#main_menu').slicknav();
            jQuery('.flexslider').flexslider({
            animation: "fade",
                    directionNav: false,
                    start: function(slider){
                    jQuery('body').removeClass('loading');
                    }
            });
            });
        </script>
    </body>

    <!-- Mirrored from dpi.gov.bd/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Aug 2018 12:35:57 GMT -->
</html>
