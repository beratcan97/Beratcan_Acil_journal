<div class="formContainer">
    <form class="center" action="classes/entries.php" method="POST" id="entryForm">
        <label for="title">Title</label>
        <input type="text" name="title" placeholder="Title"><br>
        <label for="Content">Content</label>
        <textarea form="entryForm" name="content" placeholder="Content..."></textarea><br>        
        <input type="hidden" name="createdAt" value="<?php echo date("Y-m-d H:i:s"); ?>">
        <input type="hidden" name="userID" value="<?php echo $_SESSION["userID"] ?>">
        <input class="greenButton" type="submit" value="Publish">
    </form>
</div>