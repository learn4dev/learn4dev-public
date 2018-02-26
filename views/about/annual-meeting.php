<?= $this->render('@humhub/modules/learn4dev/views/common/head') ?>
<div id="layout-content">
    <div class="container">
        <?php ?>


        <p style="margin:25px;text-align:center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/lf5yxsn29ts" frameborder="0" allowfullscreen></iframe>
        </p>

        <p>

            <?php $p = $this->theme->getBaseUrl(). '/img/l4d-save-the-date.png';
            ?>
            <img class="img-responsive" style="width: 50% ;margin:auto" src="<?= $p ?>" alt="Save the date! Annual Meeting 2018: 28th to 30th of May at ITCILO TURIN"> 
        </p>
    </div>


</div>
