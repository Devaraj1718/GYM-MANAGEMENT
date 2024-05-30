<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .total {
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .button-group {
            text-align: right;
        }
        .button-group button {
            padding: 10px 20px;
            margin: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Payment Details</h1>
    <form id="paymentForm">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" required>
        </div>
        <div class="form-group">
            <label for="number">Number</label>
            <input type="text" id="number" required>
        </div>
        <div class="form-group">
            <label for="month">Month</label>
            <select id="month" required>
                <option value="">Select Month</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" id="amount" required>
        </div>
        <div class="button-group">
            <button type="button" onclick="addPayment()">Add Payment</button>
        </div>
    </form>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Number</th>
                <th>Month</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody id="paymentDetails">
            <!-- Payment details will be added here dynamically -->
        </tbody>
        <tfoot id="totals">
            <!-- Total amounts per month will be added here dynamically -->
        </tfoot>
    </table>
</div>

<script>
    let monthlyTotals = {};

    function addPayment() {
        const name = document.getElementById('name').value;
        const number = document.getElementById('number').value;
        const month = document.getElementById('month').value;
        const amount = parseFloat(document.getElementById('amount').value);

        if (!name || !number || !month || isNaN(amount)) {
            alert('Please fill out all fields correctly.');
            return;
        }

        if (!monthlyTotals[month]) {
            monthlyTotals[month] = 0;
        }
        monthlyTotals[month] += amount;

        const tableBody = document.getElementById('paymentDetails');
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td>${name}</td>
            <td>${number}</td>
            <td>${month}</td>
            <td>$${amount.toFixed(2)}</td>
        `;
        tableBody.appendChild(newRow);

        updateTotals();

        // Clear the form fields
        document.getElementById('paymentForm').reset();
    }

    function updateTotals() {
        const totalsFooter = document.getElementById('totals');
        totalsFooter.innerHTML = '';
        for (const month in monthlyTotals) {
            const totalRow = document.createElement('tr');
            totalRow.innerHTML = `
                <td colspan="3" class="total">${month} Total</td>
                <td class="total">$${monthlyTotals[month].toFixed(2)}</td>
            `;
            totalsFooter.appendChild(totalRow);
        }
    }
</script>

</body>
</html>
