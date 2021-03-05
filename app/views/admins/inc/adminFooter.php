
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="footer-details d-flex justify-content-center justify-content-md-start mt-3">

                    <div class="footer-social-icon">
                        <?php if(!empty($data['social']->facebook_so)) : ?>
                            <a href="<?php echo $data['social']->facebook_so; ?>" target="_blank" title="<?php echo SITENAME; ?> on Facebook"><i class="fab fa-facebook fa-fw"></i></a>
                        <?php endif; ?>
                        <?php if(!empty($data['social']->twitter_so)) : ?>
                            <a href="<?php echo $data['social']->twitter_so; ?>" target="_blank" title="<?php echo SITENAME; ?> on Twitter"><i class="fab fa-twitter fa-fw"></i></a>
                        <?php endif; ?>
                        <?php if(!empty($data['social']->linkedin_so)) : ?>
                            <a href="<?php echo $data['social']->linkedin_so; ?>" target="_blank" title="<?php echo SITENAME; ?> on Linkedin"><i class="fab fa-linkedin fa-fw"></i></a>
                        <?php endif; ?>
                        <?php if(!empty($data['social']->google_so)) : ?>
                            <a href="<?php echo $data['social']->google_so; ?>" target="_blank" title="<?php echo SITENAME; ?> on google plus"><i class="fab fa-google-plus-g fa-fw"></i></a>
                        <?php endif; ?>
                        <?php if(!empty($data['social']->instagram_so)) : ?>
                            <a href="<?php echo $data['social']->instagram_so; ?>" target="_blank" title="<?php echo SITENAME; ?> on Instagram"><i class="fab fa-instagram fa-fw"></i></a>
                        <?php endif; ?>
                        <?php if (!empty($data['social']->quora_so)) : ?>
                            <a id="quora-page-footer" href="<?php echo $data['social']->quora_so; ?>" target="_blank" title="<?php echo SITENAME; ?> on Quora"><i class="fab fa-quora fa-fw"></i></a>
                        <?php endif; ?>
                        <?php if(!empty($data['social']->youtube_so)) : ?>
                            <a href="<?php echo $data['social']->youtube_so; ?>" target="_blank" title="<?php echo SITENAME; ?> on Youtube"><i class="fab fa-youtube fa-fw"></i></a>
                        <?php endif; ?>
                    </div>

                </div>
            </div>

            <div class="col-md copyright">
                <div class="d-flex justify-content-center justify-content-md-end mt-3">
                    <small><?php echo APPVERSION; ?> created by <a class="red" href="<?php echo CREATEDBYURL; ?>"><?php echo CREATEDBY; ?></a> <span><?php echo date("Y");?> all rights reserved</span>
                        <a class="red" href="<?php echo URLROOT; ?>"><?php echo COPYRIGHT . SITENAME; ?></a></small>
                </div>
            </div>
</footer>

<script src="<?php echo URLROOT; ?>/js/jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="<?php echo URLROOT; ?>/js/adm/bootstrap.bundle.min.js" type="text/javascript"></script>

<script src="<?php echo URLROOT; ?>/js/adm/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
<script src="https://cdn.tiny.cloud/1/moy3taxyiui51g7l4w3ank9v3csjglscil6oeyfofjd5kaqr/tinymce/5.1.5-67/tinymce.min.js"></script>

<script src="<?php echo URLROOT; ?>/js/adm/admin.js" type="text/javascript"></script>
<script src="<?php echo URLROOT; ?>/js/adm/clipboard.min.js" type="text/javascript"></script>
<script src="<?php echo URLROOT; ?>/js/adm/lazysizes.min.js" async="" type="text/javascript"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/datatables.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js" async="" type="text/javascript"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js" async="" type="text/javascript"></script>
<script>

    $(document).ready(function() {
        let table = $('.reports').DataTable( {
            "order": [[0,"desc"],[1,"asc"]],
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        });
    });


    function changeHiddenInput (objDropDown)
    {
        let t = $( "#glCat option:selected" ).text();
        $('#hiddenInput').val(t);
        return objDropDown;
   }
    // Tooltip

    $('.photoLink').tooltip({
        trigger: 'click',
        placement: 'bottom'
    });

    function setTooltip(btn,message) {
        btn.tooltip('hide')
            .attr('data-original-title', message)
            .tooltip('show');
    }

    function hideTooltip(btn) {
        setTimeout(function() {
            btn.tooltip('hide');
        }, 1000);
    }

    // Clipboard

    let clipboard = new ClipboardJS('.photoLink');

    clipboard.on('success', function(e) {
        let btn = $(e.trigger);
        setTooltip(btn,'Copied!');
        hideTooltip(btn);
    });

    clipboard.on('error', function(e) {
        let btn = $(e.trigger);
        setTooltip('Failed!');
        hideTooltip(btn);
    });

</script>
</body>
</html>