class Cash extends Payment{ 

    constructor(id, amount){
        super(id);
        this.amount = amount;
    }

    printPayment(){
        console.log("Id payment: " +  this.id + " Amount: " + this.amount);
        
    }

}