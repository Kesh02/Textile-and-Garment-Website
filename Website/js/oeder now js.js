var addItemID = 0;

function addtocart(item)
{
    addItemID += 1;



    var selectedItem = document.createElement('div');
    selectedItem.classList.add('cartImg');

    selectedItem.setAttribute('id',addItemID);

    var img = document.createElement('img');
    img.setAttribute("src",item.children[0].currentSrc);
   

    img.style.width = "150px";
    img.style.height = "200px";

    

    var title = document.createElement('div');
    title.innerText = item.children[1].innerText;



    var label = document.createElement('div');
    label.innerText = item.children[2].children[0].innerText;

    var select = document.createElement('span');
    select.innerText = item.children[2].children[1].value;

    var price = document.createElement('div');
    price.innerText = item.children[2].innerText;

    var input = document.createElement('div');
    input.innerText = item.children[3].innerText;

    label.append(select);

    var delbtn = document.createElement('button');
    delbtn.innerText = 'Detele';
    delbtn.setAttribute('onclick' , 'del('+ addItemID +')');


    var cartitems = document.getElementById('title');


    selectedItem.append(img);
  
    selectedItem.append(title);
    selectedItem.append(label);

    selectedItem.append(delbtn);
    cartitems.append(selectedItem);
     
    
}

function del (item)
{
    document.getElementById(item) .remove();
}

