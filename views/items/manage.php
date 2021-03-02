<?php
require_once 'helpers/utils.php';

?>

    <h1>Manage items</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PRIZE</th>
            <th>STOCK</th>
			<th>Date</th>
			</tr>
                <?php
while ($item = $items->fetch_object()): ?>
      

            <tr>
                <td>
                    <?=$item->id?>
                </td>
              
                <td>
                    <?=$item->description?>
                </td>
                <td>
                    <?=$item->prize?>
                </td>
                <td>
                    <?=$item->stock?>
                </td>
           
                <td>
                    <?=$item->date?>
                </td>
             
                <?php endwhile;?>
            </tr>
            <a href="<?=BASE_URL?>item/create" class="button">Add item</a>
    </table>