let money = prompt("Ваш бюджет?");
let name = prompt("Название вашего магазина?");

let mainList = {
    budget: money,
    shopName: name,
    shopGoods: [],
    employers: {},
    open: false
}

for (let i = 0; i < 5; i++) {

    let a = prompt(" Какой тип товаров будем продавать? ");
    mainList.shopGoods[i] = a;

}

alert(mainList.budget / 30);

console.log(mainList);