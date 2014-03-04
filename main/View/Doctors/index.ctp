<table>
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Mobile</td>
        </tr>
    </thead>

    <tbody>
    <?php foreach($doctors as $doctor):?>
        <tr>
            <td><?php echo $doctor['Doctor']['id']?></td>
            <td><?php echo $doctor['Doctor']['name']?></td>
            <td><?php echo $doctor['Doctor']['mobile']?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>