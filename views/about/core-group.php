<?= $this->render('@humhub/modules/learn4dev/views/common/head') ?>
<div id="layout-content">
    <div class="container">
        <?php ?>
        <h3>Core Group</h3>
        <p>
            Learn4dev's Core Group serves as a board for the network. 
            It includes members who are organisers of the most recent 
            and forthcoming Annual Meetings. As all members are expected
            to help organise an Annual Meeting at some point, each will 
            have an opportunity to participate in the Core Group as well.     
        </p>
        <p>
            The Core Group typically meets four times a year. 
            While the Core Group requires extraordinary commitment 
            from members, its meetings can be held at the offices of 
            learn4dev members who are not part of the Core Group, 
            including back-to-back with meetings of 
            one or more Expert Groups.
        </p>
        <h3>Current Members</h3>
        <div class='container'>
            <?= \humhub\modules\learn4dev\widgets\ProfileWidget::widget(); ?>
        </div>
        <table>
            <tr>
                <td style="width:30%"><strong>Mareike Zenker</strong></td>
                <td style="width:25%"><a href="https://www.giz.de/en/html/index.html">GIZ</a></td>
                <td style="width:55%">Chair of the network</td>
            </tr>
            <tr>
                <td><strong>Miguel Exposito-Verdejo</strong></td>
                <td><a href="https://ec.europa.eu/commission/index_en">European Commission</a></td>
                <td>Expert Group Coordinator</td>
            </tr>
            <tr>
                <td><strong>Jana Repanšek </strong></td>
                <td><a href="https://www.cef-see.org/">CEF</a></td>
                <td>Previous chair of the network (2016)</td>
            </tr>
            <tr>
                <td><strong>Monica Lisa</strong></td>
                <td><a href="http://www.itcilo.org/en">ITC ILO</a></td>
                <td>Organiser annual meeting (2018) </td>
            </tr>
            <tr>
                <td><strong>Tom Wambeke</strong></td>
                <td><a href="http://www.itcilo.org/en">ITC ILO</a></td>
                <td>Organiser annual meeting (2018) </td>
            </tr>
            <tr>
                <td><strong>Nathalie Maelfait</strong></td>

                <td><a href="http://www.btcctb.org">BTC</a></td>
                <td>Organiser annual meeting (2017) </td>
            </tr>
            <tr>
                <td><strong>Pauline Girard</strong></td>
                <td><a href="http://www.btcctb.org">BTC</a></td>
                <td>Organiser annual meeting (2017) and communication coordinator </td>
            </tr>
            <tr>
                <td><strong>Véronique Meyers</strong></td>
                <td><a href="https://luxdev.lu/en">Luxdev</a></td>
                <td>Website Management</td>
            </tr>
        </table>

        <p style="margin-top:20px">
            To contact all current and former Core Group members,
            visit the network's LinkedIn page in the footer of this page.

        </p>
    </div>


</div>
