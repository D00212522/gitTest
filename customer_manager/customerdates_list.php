<?php include '../view/header.php'; ?>
<main>

    <h1>Date Category</h1>
    <table>
        <tr>
            <th>dates</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($customerdates as $customerdate) : ?>
        <tr>
            <td><?php echo $customerdate['customerDate']; ?></td>
            <td>
                <form id="delete_date_form"
                      action="index.php" method="post">
                    <input type="hidden" name="action" value="delete_date">
                    <input type="hidden" name="customer_id"
                           value="<?php echo $customerdate['customerID']; ?>">
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br />

    <h2>Add Dates</h2>
    <form id="add_date_form"
          action="index.php" method="post">
        <input type="hidden" name="action" value="add_date">

        <label>dates:</label>
        <input type="input" name="Cdate">
        <input type="submit" value="Add">
    </form>

    <p><a href="index.php?action=list_customer">List Customers</a></p>

</main>
<?php include '../view/footer.php'; ?>