<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">N°</th>
            <th scope="col">Code</th>
            <th scope="col">Seats</th>
            <th scope="col">State</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    <?php for($i=0;$i<count($params);$i++){ ?>
        <tr>
        <?php foreach($params[$i] as $key=>$value){ ?>
            <td><?php echo $params[$i][$key]?></td>
        <?php } ?>
            <div>
                <td><i class="far fa-edit" OnClick="edit(<?php echo $params[$i]['room_number']; ?>)"></i></td>
                <td><i class="far fa-trash-alt" OnClick="remove(<?php echo $params[$i]['room_number']; ?>)"></i></td>
                
            <div>
        </tr>
        
    <?php } ?>
    <tbody>
    
</table>
