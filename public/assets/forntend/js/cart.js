
function init() {
    updateTotalPrice();

    const qtyInput = document.querySelectorAll('.qty-input')
    qtyInput.forEach(input => {
        input.addEventListener('change', function () {
            const qty = input.value;
            if (qty < 1) {
                alert('negative value not allowed');
                input.value = 1
                return false;
            }

            const unitPrice = parseFloat(input.parentElement.previousElementSibling.innerText)
            const itemTotalPrice = qty * unitPrice;
            input.parentElement.nextElementSibling.innerText = itemTotalPrice;
            updateTotalPrice();
        })
    })

    const removeBtn = document.querySelectorAll('.remove-btn')
    removeBtn.forEach(btn => {
        btn.addEventListener('click', function () {
            btn.parentElement.parentElement.remove()
            const cartItemId = btn.getAttribute('data-id');
            deleteCartItem(cartItemId).then(response => {
                console.log(response)
                const cartItemCountElement = document.getElementById('cartItemCount');
                const cartItemCount = parseInt(cartItemCountElement.innerText) - 1;
                cartItemCountElement.innerText = cartItemCount;
            });
            updateTotalPrice()
        })
    })
}

function updateTotalPrice() {
    let tbody = document.getElementById('cartItems').children;
    let totalPrice = 0;
    for (let i = 0; i < tbody.length; i++) {
        totalPrice += parseInt(tbody[i].children[4].innerHTML)
    }
    document.getElementById('totalPrice').innerText = totalPrice;
}

// aync await
async function getCartItems() {
    const fetchCartItems = await fetch('http://localhost:8000/cart-items');
    const response = await fetchCartItems.json();
    return response;
}

getCartItems().then(result => {
    document.getElementById('cartItems').innerHTML = `${result.data.map((item, index) => {
        return `
        <tr>
        <td>${index + 1}</td>
        <td class="align-middle"><img src="img/product-1.jpg" alt=""
                style="width: 50px;">${item.title}</td>
        <td class="align-middle">${item.unitPrice}</td>
        <td class="align-middle"><input  class="qty-input" name="qty" type="number" value="${item.qty}"></td>
        <td  class="align-middle">${item.unitPrice * item.qty}</td>
        <td class="align-middle">
            <button  class=" remove-btn btn btn-sm btn-primary" data-id="${item.id}" type="button" ><i class="fa fa-times"></i></button>
        </td>
    </tr>
`
    }).join(" ")}`

    document.getElementById('loader').classList.add('d-none')
    init();
})

async function deleteCartItem(cartItemId) {
    const deleteCartItems = await fetch(`http://localhost:8000/cart-items/${cartItemId}`, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    });
    return await deleteCartItems.json();
}





