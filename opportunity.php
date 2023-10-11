    <!-- Opportunity Stage Form -->
    <form method="POST" action="process_opportunity.php">
        <!-- Input fields for client's needs, budget, etc. -->
        <label for="clientNeed">Client's Need:</label>
        <textarea id="clientNeed" name="clientNeed" required></textarea><br>

        <label for="budget">Client's Budget:</label>
        <input type="number" id="budget" name="budget" required><br>

        <label for="budgetSufficiency">Is the budget enough?</label>
        <input type="radio" id="yes" name="budgetSufficiency" value="Yes" required>
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="budgetSufficiency" value="No" required>
        <label for="no">No</label><br>

        <label for="howFound">How did they find out about our company?</label>
        <input type="text" id="howFound" name="howFound" required><br>
    </form>

    <div class="btns-group">
        <a href="#" class="btn btn-save" id="saveOpportunity">Save</a>
        <a href="#" class="btn btn-lost" id="lostOpportunity">Lost</a>
        <a href="#" class="btn btn-next" id="promoteOpportunity">Promote</a>
    </div>

    <div id="saveMessage" class="message"></div>
