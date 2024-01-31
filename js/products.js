document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', handleSearch);

    function handleSearch() {
        const searchTerm = searchInput.value.toLowerCase();

        const allProducts = document.querySelectorAll('.grid-item');

        allProducts.forEach(product => {
            const productName = product.querySelector('h3').innerText.toLowerCase();
            const productId = product.dataset.productId;

            if (productName.includes(searchTerm)) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    }
});




document.addEventListener('DOMContentLoaded', function () {
    console.log('Script loaded!');

    addAddToCartEventListener('ball');
    addAddToCartEventListener('footballBoots');
    addAddToCartEventListener('footballShorts');
    addAddToCartEventListener('footballSocks');
    addAddToCartEventListener('trainingHoodie');
    addAddToCartEventListener('footballJersey');
    addAddToCartEventListener('bag');
    addAddToCartEventListener('shinPads');
    addAddToCartEventListener('thermalShirt');
    addAddToCartEventListener('thermalShorts');
    addAddToCartEventListener('windRunner');
    addAddToCartEventListener('headWear');
});

function addAddToCartEventListener(productId) {
    var buttonId = 'addToCartBtn_' + productId;
    var button = document.getElementById(buttonId);

    console.log('Button ID:', buttonId);

    if (button) {
        button.addEventListener('click', function() {
            console.log('Button clicked!');
            checkUserLoginStatus(function(isLoggedIn) {
                if (isLoggedIn) {
                    alert('The product has been successfully added to the cart!');
                } else {
                    alert('You must be logged in to add a product to your cart!');
                    console.log('Before redirect');
                    window.location.replace('login.php');
                    console.log('After redirect');

                }
            });
        });
    } else {
        console.error('Button with ID ' + buttonId + ' not found.');
    }
}
function checkUserLoginStatus(callback) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'check_session.php', true);

    xhr.onload = function () {
        if (xhr.status === 200) {
            try {
                var response = JSON.parse(xhr.responseText);
                console.log('Response from server:', response);
                callback(response.loggedIn);
            } catch (error) {
                console.ward('Error parsing JSON response. Trying HTML parsing...', error);

                var doc = new DOMParser().parseFromString(xhr.responseText, 'text/html');
                var errorElements = doc.querySelectorAll('b');

                if (errorElements.length > 0) {
                    console.warn('Server returned an error:', errorElements[0].textContent);
                } else {
                    console.ward('Unknown error. Unable to parse response.');
                }

                callback(false);
            }
        } else {
            console.warn('Error loading check_session.php. Status:', xhr.status);
            callback(false);
        }
    };

    xhr.send();
}








