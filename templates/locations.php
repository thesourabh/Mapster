<script>
function delLocation(locid)
{
$("#lid").val(locid);
$("#del-loc").submit();
}

</script>

<div style="width: 85%;margin: 0 auto; text-align: center;">
<table class="table table-striped">

    <thead>
        <tr>
            <th>Name</th>
            <th>Latitude</th>
            <th>Longitude</th>
        </tr>
    </thead>

    <tbody>
    <form action="del.php" method="post" id="del-loc">
    <input type="hidden" name="lid" id="lid" value="">
    <?php $count = 0; ?>
    <?php foreach ($locations as $location): ?>
    <?php $url = 'viewer.php?lat=' . $location["lat"] . '&lng=' . $location["lng"] ?>
    
    <tr>
        <td><a href='<?= $url ?>'><?= $location["name"] ?></a></td>
        <td><?= $location["lat"] ?></td>
        <td><?= $location["lng"] ?>
        <a class="del-button" title="Delete This Location" onclick='delLocation(<?= $location["lid"] ?>)'>X</a>
        </form>
        </td>
    </tr>
    <?php $count++; ?>

<?php endforeach ?>
<?php if($count == 0) {redirect('map.php');} ?>

    </tbody>

</table>
</div>
