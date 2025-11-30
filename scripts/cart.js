function changeQty(button, change) {
    const cartItem = button.closest(".cart-item");
    const qtySpan = cartItem.querySelector(".qty");
    const priceText = cartItem.querySelector(".details p").innerText.replace("₱", "");
    const itemTotal = cartItem.querySelector(".item-total");
    
    let qty = parseInt(qtySpan.innerText);
    qty = Math.max(1, qty + change);
    qtySpan.innerText = qty;

    let newTotal = qty * parseFloat(priceText);
    itemTotal.innerText = "₱" + newTotal.toFixed(2);

    updateSubtotal();
}

function updateSubtotal() {
    const totals = document.querySelectorAll(".item-total");
    let subtotal = 0;

    totals.forEach(t => {
        subtotal += parseFloat(t.innerText.replace("₱", ""));
    });

    document.getElementById("subtotal").innerText = "₱" + subtotal.toFixed(2);
}

function removeItem(cartId) {
    fetch("remove_item.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: "cart_id=" + cartId
    })
    .then(res => res.text())
    .then(data => {
        alert(data);
        location.reload(); // Refresh to update cart
    });
}

function updateQty(cartId, change) {
    fetch("update_quantity.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: "cart_id=" + cartId + "&change=" + change
    })
    .then(res => res.text())
    .then(() => location.reload());
}

document.addEventListener("DOMContentLoaded", () => {
    const checkoutBtn = document.querySelector(".checkout-btn");
    if (!checkoutBtn) return;

    checkoutBtn.addEventListener("click", () => {
        fetch("checkout.php", {
            method: "POST"
        })
        .then(res => res.text())
        .then(data => {
            alert(data);
            if (data.includes("success")) {
                window.location.href = "transaction.php";
            }
        })
        .catch(err => console.error(err));
    });
});
