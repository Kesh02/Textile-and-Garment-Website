var addItemID = 0;

function addtocart(item) {
  addItemID += 1;

  var selectedItem = document.createElement('div');
 

  selectedItem.setAttribute('id', addItemID);

  var img = document.createElement('img');
  img.setAttribute('src', item.children[0].currentSrc);
  img.style.width = '150px';
  img.style.height = '200px';

  var title = document.createElement('div');
  title.innerText = item.children[1].innerText;

  var label = document.createElement('div');
  label.innerText = item.children[2].children[0].innerText;

  var select = document.createElement('span');
  select.innerText = item.children[2].children[1].value;

  var label1 = document.createElement('div');
  label1.innerText = item.children[3].children[0].innerText;

  var quantity = document.createElement('div');
  quantity.innerText = item.children[3].children[1].value; // Display the quantity


  label.append(select);

  
  var delbtn = document.createElement('button');
  delbtn.innerText = 'Delete';
  delbtn.setAttribute('onclick', 'del(' + addItemID + ')');

  var orderbtn = document.createElement('button');
  orderbtn.innerText = 'Order Now';
  orderbtn.setAttribute('onclick', placeorder());

  var cartitems = document.getElementById('title');

  selectedItem.append(img);
  selectedItem.append(title);
  selectedItem.append(label);
  selectedItem.append(label1);
  selectedItem.append(quantity); // Add quantity to the selected item
  selectedItem.append(delbtn);
  selectedItem.append(orderbtn);
 
  

  cartitems.append(selectedItem);
}

function del(item) {
  document.getElementById(item).remove();
}




function del(item) {
  document.getElementById(item).remove();
}


function placeorder() {
  var item = event.target.parentNode;
  var itemName = item.querySelector(".title").innerText;
  var itemSize = item.querySelector("select:nth-of-type(1)").value;
  var itemQuantity = item.querySelector("select[name=selec]").value;
  var itemPrice = item.querySelector(".title1").innerText;

  document.getElementById("pname").value = itemName;
  document.getElementById("size").value = itemSize;
  document.getElementById("qun").value = itemQuantity;
  document.getElementById("price").value = itemPrice;

  // Update total price
  var totalPrice = parseInt(itemPrice) * parseInt(itemQuantity);
  document.getElementById("totalprice").value = totalPrice + "LKR";
}

      
