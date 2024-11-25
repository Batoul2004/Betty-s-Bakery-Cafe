function viewImg(img) {
    img.style.width = '80%';
    img.style.height = '80%';
}
function resetImg(img) {
    img.style.width = '';
    img.style.height = '';
}

function calculatePrice(){
    
    var quantityInput = document.getElementById("quantity");
    var quantity = parseInt(quantityInput.value);

    var total = quantity * 2.90;  
    //display total price
    document.getElementById("price").innerText = "$" + total.toFixed(2);
}

function invalidQuantity() {
    var quantityInput = document.getElementById("quantity");
    if (parseInt(quantityInput.value) === 0) {
        quantityInput.value = 1;
    }
    else if (parseInt(quantityInput.value) > 24) {
        quantityInput.value = 24;
        
    }
}


function handleKeyPress(event) {
    if (event.key === "Enter") {
        event.preventDefault(); // Prevent the default Enter key behavior (form submission)
        calculatePrice(); // update price
    }
}





document.addEventListener("DOMContentLoaded", function() {
    const quantityInput = document.getElementById("quantity");
    const borderHighlight = document.querySelector(".border-highlight");

    quantityInput.addEventListener("focus", function() {
       
        borderHighlight.style.boxShadow = "0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(126, 239, 104, 0.6)";
    
    });

    quantityInput.addEventListener("blur", function() {
        borderHighlight.style.borderColor = "rgb(254, 165, 0)";
        borderHighlight.style.boxShadow = "";
    });
});


function order() {
    var quantity = parseInt(document.getElementById("quantity").value);
    var orderName = document.getElementById("orderName").innerText;
    var userName = prompt("Your order of " + quantity + " " + orderName + " will be done as soon as possible. \n Please enter your name:");
    if (userName != null) {
        confirmOrder(quantity, orderName, userName);
    }
}

function confirmOrder(quantity, orderName, userName) {
    confirm("Your table will be ready for you with " + quantity + " " + orderName + ", " + userName)
    
}



//phone
function invalidQuantityPhone() {
    var quantityInput = document.getElementById("quantityphone");
    if (parseInt(quantityInput.value) === 0) {
        quantityInput.value = 1;
    }
    else if (parseInt(quantityInput.value) > 24) {
        quantityInput.value = 24;
        
    }
}


function orderPhone() {
    var quantity = parseInt(document.getElementById("quantityphone").value);
    var orderName = document.getElementById("orderNamePhone").innerText;
    var userName = prompt("Your order of " + quantity + " " + orderName + " will be done as soon as possible. \n Please enter your name:");
    if (userName != null) {
        confirmOrderPhone(quantity, orderName, userName);
    }
}

function confirmOrderPhone(quantity, orderName, userName) {
    confirm("Your table will be ready for you with " + quantity + " " + orderName + ", " + userName)
    
}

//nav
document.getElementById('navbar-toggle-button').addEventListener('click', function() {
    const navMenu = document.getElementById('nav-menu');
    navMenu.classList.toggle('show');
});


//rate
document.addEventListener('DOMContentLoaded', function () {
    const ratings = document.querySelectorAll('.rating');

    ratings.forEach(rating => {
        const stars = rating.querySelectorAll('label');

        stars.forEach(star => {
            star.addEventListener('click', () => {
                const clickedValue = star.previousElementSibling.value;

                stars.forEach(s => {
                    if (s.previousElementSibling.value <= clickedValue) {
                        s.style.color = 'yellow';
                        s.classList.add('fas');
                        s.classList.remove('far');
                    } else {
                        s.style.color = 'yelow';
                        s.classList.add('far');
                        s.classList.remove('fas');
                    }
                });
            });
        });
    });
});

