<form method="POST" action="process_lead.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="phone">Phone Number:</label>
    <input type="text" id="phone" name="phone" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br>

    <label for="company">Company:</label>
    <input type="text" id="company" name="company" required><br>

    <label for="position">Position:</label>
    <input type="text" id="position" name="position" required><br>

    <label for="boss">Boss's Name:</label>
    <input type="text" id="boss" name="boss"><br>
</form>
<div class="btns-group">
    <a href="#" class="btn btn-save" id="saveLead">Save</a>
    <a href="lead.php" class="btn btn-lost" id="lostLead">Lost</a>
    <a href="#" class="btn btn-next" id="promoteLead">Promote</a>
</div>

<div id="saveMessage" class="message"></div>