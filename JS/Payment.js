class Payment {
    id;
    amount;

    constructor(id, amount) {
        this.id = id;
        this.amount = amount;
    }
    
    printPayment() {
        console.log(this.id);
        
    }
}
