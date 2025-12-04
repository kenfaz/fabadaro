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
            // alert(data);
            if (data.includes("success")) {
                window.location.href = "transaction.php";
            }
        })
        .catch(err => console.error(err));
    });
});

// Notification function
function showNotification(message, type = "success") {
    const container = document.getElementById("notification-container");

    const notification = document.createElement("div");
    notification.classList.add("notification", type);
    notification.textContent = message;

    container.appendChild(notification);

    // Remove after 3 seconds
    setTimeout(() => {
        notification.remove();
    }, 3000);
}

// Example: Remove item
function removeItem(cartId) {
    // Your AJAX / fetch call to remove the item from database
    // For demo, let's just remove the element from DOM
    const item = document.querySelector(`.cart-item[data-cart-id='${cartId}']`);
    if (item) {
        item.remove();
        showNotification("Item removed from cart", "error");
        // Optionally update subtotal here
    }
}

// Checkout button
const checkoutBtn = document.querySelector(".checkout-btn");
checkoutBtn.addEventListener("click", function() {
    // Your checkout logic here
    showNotification("Checkout successful!", "success");
});
