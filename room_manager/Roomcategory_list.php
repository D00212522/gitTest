<?php include '../view/header.php'; ?>
<main>

    <h1>Floor Category</h1>
    <table>
        <tr>
            <th>Floor</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($roomcategories as $roomcategory) : ?>
        <tr>
            <td><?php echo $roomcategory['roomCategory']; ?></td>
            <td>
                <form id="delete_room_form"
                      action="index.php" method="post">
                    <input type="hidden" name="action" value="delete_category">
                    <input type="hidden" name="category_id"
                           value="<?php echo $roomcategory['categoryID']; ?>">
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br />

    <h2>Add Floor Category</h2>
    <form id="add_category_form"
          action="index.php" method="post">
        <input type="hidden" name="action" value="add_category">

        <label>Floor:</label>
        <input type="input" name="Cname">
        <input type="submit" value="Add">
    </form>

    <p><a href="index.php?action=list_Room">List Rooms</a></p>

</main>
<?php include '../view/footer.php'; ?>