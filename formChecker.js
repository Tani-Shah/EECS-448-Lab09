let total = 0;
let totalItems = 0;
let brushPenCost = 5;
let focusCost = 10;
let consistencyCost = 10;
let commitmentCost = 20;
let intentionalCost = 10;
let pointedPenCost = 10;
let shippingCost = 0;


function reset(){
	document.querySelector("#brushPen").innerHTML = 0;
	document.querySelector("#focus").innerHTML = 0;
	document.querySelector("#consistency").innerHTML = 0;
	document.querySelector("#commitment").innerHTML = 0;
	document.querySelector("#intentional").value = "0";
	document.querySelector("#pointedPen").value = "0";
	document.querySelector("#items").value = "0";
	document.querySelector("#shippingCost").value = "0";
	document.querySelector("#items").value = "0";
}

function validateForm(){
	
	let brushPen = document.querySelector("#brushPen").value;
	let focus = document.querySelector("#focus").value;
	let consistency = document.querySelector("#consistency").value;
	let commitment = document.querySelector("#commitment").value;
	let intentional = document.querySelector("#intentional").value;
	let pointedPen = document.querySelector("#pointedPen").value;
	let username = document.querySelector("#username").value;
	let password = document.querySelector("#password").value;
	this.total();
	if((brushPen == "" ) || (focus == "" ) || (commitment == "") || (consistency== "") || (intentional == "") || (pointedPen == "")){
		alert("Please, put a value for each field.");
		return false;
	}
	if((brushPen == "0" ) && (focus == "0" ) && (commitment == "0")  && (consistency== "0") && (intentional == "0") && (pointedPen == "0")){
		alert("Select at least one item to buy.");
		return false;
	}
	if(this.total < 1 || this.totalItems < 1){
		alert("Select at least one item to buy.");
		return false;
	}
	if(username == "" || password == ""){
		alert("Please enter a username and password.");
		return false;
	}
	
	console.log(this.total + "---------");
	this.total = 0;
	this.totalItems = 0;
	return true;
}

function total(){
	let brushPen = parseInt(document.querySelector("#brushPen").value);
	let focus = parseInt(document.querySelector("#focus").value);
	let consistency = parseInt(document.querySelector("#consistency").value);
	let commitment = parseInt(document.querySelector("#commitment").value);
	let intentional = parseInt(document.querySelector("#intentional").value);
	let pointedPen = parseInt(document.querySelector("#pointedPen").value);
	this.shipping();
	this.total = (brushPen * this.brushPenCost) + (focus * this.focusCost)+ (consistency * this.consistencyCost) + 
				(commitment * this.commitmentCost) + (intentional * this.intentionalCost) + (pointedPen * this.pointedPenCost);
	this.totalItems = brushPen + focus + consistency + commitment + intentional + pointedPen;
	this.totalPrice += this.delivery;
}

function shipping(){
	let shipping = document.getElementsByName("shippingCost");
	let price = 0;
	for(let i = 0; i < shipping.length; i++){
		if (shipping[i].checked){
			price = shipping[i].value;
		}
	}
	if(price == "free"){
		this.delivery = 0;
	}else if (price == "overNight"){
		this.delivery = 50;
	}else if (price == "threeDay"){
		this.delivery = 5;
	}
}

function cost(){
	this.total();
	this.shipping();
	document.querySelector("#totalItems").innerHTML = "$ " + this.totalItems;
	document.querySelector("#shippingCost").innerHTML = "$ " + this.delivery;
	document.querySelector("#total").innerHTML = "$ " + this.total;

	this.total = 0;
	this.totalItems = 0;
}

