const categoryItems = document.querySelectorAll(".sidebar ul li");
const cards = document.querySelectorAll(".card");


// Search function
searchInput.addEventListener("input", function () {
  const query = searchInput.value.toLowerCase();

  cards.forEach((card) => {
    const title = card.querySelector("h3").textContent.toLowerCase();
    const genre = card.querySelector("p").textContent.toLowerCase();

    if (title.includes(query) || genre.includes(query)) {
      card.style.display = "block";
    } else {
      card.style.display = "none";
    }
  });
});

categoryItems.forEach((item) => {
  item.addEventListener("click", () => {
    // Remove active class from all
    categoryItems.forEach((i) => i.classList.remove("active"));
    item.classList.add("active");

    const genre = item.dataset.genre;

    cards.forEach((card) => {
      const cardGenre = card.querySelector("p").textContent;
      if (genre === "all" || cardGenre.includes(genre)) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    });
  });
});

document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".add-to-cart");

    buttons.forEach(button => {
        button.addEventListener("click", () => {
            const productId = button.getAttribute("data-product-id");

            // Send request to add_to_cart.php
            fetch("add_to_cart.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: "product_id=" + productId
            })
            .then(res => res.text())
            .then(data => {
                alert(data); // show message from PHP
            })
            .catch(err => {
                console.error(err);
            });
        });
    });
});
