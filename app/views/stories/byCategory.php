<div id="page-content"><!-- Needed for sticky footer-->
    <main role="main">
        <div style="height: 150px;"></div>
        <section>
            <div class="container-fluid">
                <h1 class="text-center text-uppercase mt-3 mb-5"><i
                            class="fas fa-wave-square color-orange-text fa-rotate-260"></i> Stories<span
                            class="color-orange-text"></span> By <span class="color-orange-text">Category</span> <i
                            class="fas fa-wave-square fa-rotate-45"></i></h1>
                <div class="text-center mb-4"><a class="btn-sm btn-sm-outline color-orange" onclick="history.go(-1)"
                                                 href="#">Back</a></div>
                <?php
                require APPROOT . '/views/inc/storyCategories.php';
                ?>
            </div>
        </section>
    </main>
</div><!-- Page id ends sticky footer-->

