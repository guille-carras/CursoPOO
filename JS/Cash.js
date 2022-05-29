class Cash extends Payment{ 
    amount;
    constructor(id, amount){
        super(id);
        this.amount = amount;
    }

    printPayment(){
        console.log("Id payment: " +  id + " " + amount)
    }

}