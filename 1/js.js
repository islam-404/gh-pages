let money = prompt("Ваш бюджет?");
let name = prompt("Название вашего магазина?");

let mainList = {
    budget: money,
    shopName: name,
    shopGoods: [],
    employers: {},
    open: false
}

for (let i = 0; i < 2; i++) {
    
    let a = prompt(" Какой тип товаров будем продавать? ");
    innerloop:
    if ((typeof(a)) === "string" && (typeof(a)) === null && a != "" && a.length < 50) {
        console.log(" Все верно! ");
        mainList.shopGoods[i] = a;
    } else {
        prompt(" введите корректное название ");
        break innerloop;
    }
}

//alert(mainList.budget / 30);

console.log(mainList);