function searchTransactions() {
    let input = document.getElementById("search").value.toLowerCase();
    let rows = document.querySelectorAll("#transactionBody tr");

    rows.forEach(row => {
        let text = row.innerText.toLowerCase();
        row.style.display = text.includes(input) ? "" : "none";
    });
}
